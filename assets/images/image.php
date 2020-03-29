<?php

$filename = isset($_GET['filename']) ? $_GET['filename'] : null;
$width = isset($_GET['width']) ? $_GET['width'] : 400;

if (!$filename) {
    return;
}

return new Image($filename, $width);

/**
 * 
 * @package 
 */
class Image
{
    /** @var string */
    protected static $_fileName;

    /** @var int */
    protected static $_width;

    public function __construct(string $filename, int $width = 400)
    {
        self::$_fileName = $filename;
        self::$_width = $width;

        return self::create();
    }

    /** @var string */
    protected static function _getPath()
    {
        return getcwd() . '/' . self::$_fileName;
    }

    /**
     * @param string $imageUrl
     * @param int $maxHeight 
     * @return array 
     */
    protected static function _aspectRatio(string $imageUrl)
    {
        $imageDimensions = getimagesize($imageUrl);

        $imageWidth = $imageDimensions[0];
        $imageHeight = $imageDimensions[1];

        $imageSize['width'] = $imageWidth;
        $imageSize['height'] = $imageHeight;

        $aspectRatio = ($imageWidth / $imageHeight);
        $maxHeight = number_format(self::$_width / $aspectRatio, 0);

        if ($imageWidth > self::$_width || $imageHeight > $maxHeight) {
            if ($imageWidth > $imageHeight) {
                $imageSize['height'] = floor(($imageHeight / $imageWidth) * self::$_width);
                $imageSize['width']  = self::$_width;
            } else {
                $imageSize['width']  = floor(($imageWidth / $imageHeight) * $maxHeight);
                $imageSize['height'] = $maxHeight;
            }
        }

        return $imageSize['height'];
    }

    /**
     * @param string $uploadedfile
     * @return bool 
     */
    public static function create()
    {
        $uploadedfile = self::_getPath();

        // Capture the original size of the uploaded image
        if (!$info = getimagesize($uploadedfile)) {
            return false;
        }

        switch ($info['mime']) {
            case 'image/jpeg':
                $src = imagecreatefromjpeg($uploadedfile);
                break;
            case 'image/gif':
                $src = imagecreatefromgif($uploadedfile);
                break;
            case 'image/png':
                $src = imagecreatefrompng($uploadedfile);
                break;
            default:
                return false;
        }

        //Change the filename to add the filetype
        $newHeight = self::_aspectRatio(self::_getPath(), self::$_width);

        $tmp = imagecreatetruecolor(self::$_width, $newHeight);

        ob_start();

        // this line actually does the image resizing, copying from the original
        // image into the $tmp image
        imagecopyresampled($tmp, $src, 0, 0, 0, 0, self::$_width, $newHeight, $info[0], $info[1]);

        switch ($info['mime']) {
            case 'image/jpeg':
                imagejpeg($tmp, null, 70);
                break;
            case 'image/gif':
                imagegif($tmp, null, 100);
                break;
            case 'image/png':
                imagepng($tmp, null, 100);
                break;
        }

        Header('Content-type: ' . $info['mime']);
        $image = ob_get_contents();
        var_dump($image);
        die;

        $rawImageBytes = ob_get_clean();

        // ob_end_clean();

        return 'data:image/jpeg;base64, ' . base64_encode($rawImageBytes);
    }
}

<?php include 'includes/header.php'; ?>

<h1>Welcome!</h1>
<p><strong>Hi</strong>, welcome to <em>my website!</em></p>

<div id="introduction">
    <h2>A Little About Me</h2>
    <p>Things I Like</p>

    <ul>
        <li>PICTURES</li>
        <li>VIDEOS</li>
        <li>JOKES</li>
        <li>STORIES</li>
        <li>GAMES</li>
    </ul>
</div>

<div id="media">
    <h2>Media</h2>
    <p>RANDOM CAT!</p>

    <?php

    $images = [
        [
            'src' => "https://media.giphy.com/media/3o7qE7Hbomm69hYr04/giphy.gif",
            'alt' => "A cute kitten saying how are you?",
        ],
        [
            'src' => "https://media.giphy.com/media/VxbvpfaTTo3le/giphy.gif",
            'alt' => "A ginger kitten flying in the sky",
        ],
        [
            'src' => "https://media.giphy.com/media/uWYjSbkIE2XIMIc7gh/giphy.gif",
            'alt' => "A kitten wearing a wizard hat and scarf",
        ],
        [
            'src' => "https://media.giphy.com/media/U78wKLnlpdIQQgpNK2/giphy.gif",
            'alt' => "A tiny kitten being brushed"
        ]
    ];

    $imageCount = count($images);
    $randomNumber = rand(0, $imageCount - 1);
    ?>

    <div class="images">
        <div class="image">
            <img src="<?php echo $images[$randomNumber]["src"] ?>" alt="<?php echo $images[$randomNumber]["alt"] ?>">
        </div>


    </div>
</div>

<?php include 'includes/footer.php'; ?>
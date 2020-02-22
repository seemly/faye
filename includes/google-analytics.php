<?php

$host = $_SERVER['HTTP_HOST'];
$isLocal = (strpos($host, 'faye.test') !== false);

if ($isLocal) {
  return '';
}

?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-6041643-54"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-6041643-54');
</script>
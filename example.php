<?php

include 'DuckImage.php';

$duckImage = new DuckImage('nuage');

$images = $duckImage->getImages();
var_dump($duckImage);
?>
<?php

$path = "gallery/gallery.json";

$myfile = fopen($path, "r");

$gallery = json_decode(fread($myfile, filesize($path)));

fclose($myfile);

$category = NULL;

if (isset($_GET['category'])) {

    $category = $_GET['category'];

};

?>
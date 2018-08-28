<?php

$ImageURL = "https://images.pexels.com/photos/248797/pexels-photo-248797.jpeg";

$pathinfo = pathinfo($ImageURL); // To get the filename and extension

$ext = $pathinfo['extension']; 

$filename = 'images/'.$pathinfo['filename']; 

$img = @file_get_contents($ImageURL,true); // get the image from the url

file_put_contents($filename.'.'.$ext, $img); // create a file and feed the image

?>
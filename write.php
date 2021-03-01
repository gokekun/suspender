<?php
$month = date("Ym");
$today = date("Y.m.d_H:i:s");
$filename = "urlbk_$month.md";

$dir = 'logs';
 // create new directory with 744 permissions if it does not exist yet
 // owner will be the user/group the PHP script is run under
 if ( !file_exists($dir) ) {
     mkdir ($dir, 0744);
 }

$content = "* $today | $title | $url\n";

$myfile = fopen("./".$dir."/".$filename, "a+");
fwrite($myfile,$content);
fclose($myfile);
?>

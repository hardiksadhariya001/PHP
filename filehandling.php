<?php
$myfile=fopen("myfile.txt","r") or die("file not open");
echo fread($myfile,filesize("myfile.txt"));
fclose($myfile);
?>

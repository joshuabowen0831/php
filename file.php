<?php
//this is to test the file functions to get them to work correctly
$file = fopen("testing.txt","w");
fwrite($file,"Hello world my name is Josh");
fclose($file);
?>


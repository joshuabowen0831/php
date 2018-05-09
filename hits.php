<?php
//this is a program to count hits on a web page.
//before doing this assignment, I didn't know that you could alter files in php. That is pretty cool.
//The next line sets a var of the name used to store the hit value
$filename ="hits.txt";
//next, the var current is set to hold the current hit value stored in the file.
$current = fopen($filename, "r");
//the next line retrieves the contents from the hits  file
$views = fread($current, filesize($filename));
//next the file is closed
fclose($current);
//next the file must be opened again but this time for writing to add one hit count to the total number of hits to the page

$current = fopen($filename, "w");
//the following line sets the views variable to type integer from string
settype($views,"integer");
//the views veriable is incramented by 1
++$views;
//next line writes the resulting value to the hits file
fwrite($current, $views);
fclose ($current);
echo "Congratulations, you are visitor ".$views."to this web page. Have a great day!";
?>



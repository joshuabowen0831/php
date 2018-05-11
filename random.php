<?php
//this first line creates an array of numers from 1 to 5
$numbers = array(1,2,3,4,5);
//the next line creates an array to hold a random number pulled from the numbers array above

$random = array_rand($numbers);
//the next line echo's a random number from 1 to 5
echo $numbers[$random];
?>


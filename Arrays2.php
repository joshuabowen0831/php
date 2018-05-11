More about arrays

Example 1:
<?php
// Variables

$a = array(1,2,3); 
Echo $a[1];
// This prints 2.
?>

Example 2: Changing the value in an Array

<?php
$a = array(1,2,3);
$a = array(0 => 0);
Echo $a[0]; //this prints 0.
$a[1] = 4;
Echo $a[1];// This now prints 4.
?>

Example 3: my own array of numbers and what I think their values will be when echoed

<?php
$numbers = array(2,4,6);
echo $numbers[0];
//this should print 2
echo $numbers[1];
//this should print 4
echo $numbers[2];
//this should print 6
?>
example 5 changing value of numbers in an array and printing the results

<?php
$numbers = array(1,3,5);
$numbers[1] = 7;
$numbers[3] = 14;
$numbers[5] = 21;

echo $numbers[1];
//this should print 7
echo $numbers[3];
//this should print 14
echo $numbers[5];
//this should print 21

?>
example 6 creating a string array and changing it's values
<?php
$music = array("Country","Rock","Pop");
echo $music[0];
echo <<<END
<br>
$music[1]
<br>
$music[2]
END
;
?>


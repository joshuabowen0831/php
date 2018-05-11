<?php
//the following line creates an array which makes a deck of playing cards.

$cards = array( array(2,3,4,5,6,7,8,9,10,"jack","queen","king","ace"),array("clubs","diamonds","spades","hearts"));

//the next line will print 3 of spades
echo $cards[0][1]." of ".$cards[1][2];
?>


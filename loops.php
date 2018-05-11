<html>
<head>
<title> Deck of cards </title>
<body>
<h1> The first card table will be made with a while loop and a foreach loop</h1>
<table style="width:100%">
<tr> <th> card rank </th> <th> card suit</th> </tr>
<?php
//the following code makes an html table for the rank of 2 through jack and a suit of clubs
$clubs = 1;
//the first loop I am going to use is the while loop
while ($clubs<10)
{
$clubs++;

echo "<tr> <td> ".$clubs."</td> <td> Clubs </td</tr>";
}
$clubs = array ("<tr><td>Jack</td><td>Clubs</td></tr>","<tr><td>Queen</td><td>Clubs</td></tr>","<tr><td>King</td><td>Clubs</td></tr>","<tr><td>Ace</td><td>Clubs</td></tr>");
foreach ($clubs as $value) {
echo $value;
}
?>
</tr>
</table>

<h2> The following cards table will be made with a do while loop and a foreach loop </h2>
<table style="width:100%">
<tr> <th> Card Rank</th> <th> Card Suit </th> </tr>
<?php
$i = 1;
//The following do while loop fills in the table with the values 2 throught 10 and also the suit hearts

do {
$i++;
   echo "<tr><td>".$i."</td><td>Hearts</td></tr>";
} while ($i < 10);
//the following foreach loop completes the table buy printing the values jack through ace and the suit hearts
$hearts = array("<tr><td>Jack</td><td>Hearts</td></tr>","<tr><td>Queen</td><td>Hhearts</td></tr>","<tr><td>King</td><td>Hearts</td></tr>","<tr><td>Ace</td><td>Hearts</td></tr>");
foreach($hearts as $value) {
echo $value;
}
?>
</table>
<h3> The next rank and suit card table will be constructed by a for loop </h3>
<table> <tr> <th> Card Rank </th> <th> Card Suit </th> </tr>
<?php
//the following for loop will print the html table of card values 2 to 10 and the suit spades
for ($spades=2;$spades<11;++$spades) {
echo "<tr><td>".$spades."</td><td>Spades</td></tr>";
}
$spades = array("<tr><td>Jack</td><td>Spades</td></tr>","<tr><td>Queen</td><td>Spades</td></tr>","<tr><td>King</td><td>Spades</td></tr>","<tr><td>Ace</td><td>Spades</td></tr>");
foreach ($spades as $value) {
echo $value;
}
?>
</table>
<h4> The last card table will be made with a foreach loop </h4>
<table <tr> <th> Card Rank </th> <th> Card Suit </th> </tr>
<?php
$Diamonds = array("<tr><td>2</td><td>Diamonds</td></tr>","<tr><td>3</td><td>Diamonds</td></tr>","<tr><td>4</td><td>Diamonds</td></tr>","<tr><td>5</td><td>Diamonds</td></tr>","<tr><td>6</td><td>Diamonds</td></tr>","<tr><td>7</td><td>Diamonds</td</tr>","<tr><td>8</td><td>Diamonds</td></tr>","<tr><td>9</td><td>Diamonds</td></tr>","<tr><td>10</td><td>Diamonds</td></tr>","<tr><td>Jack</td><td>Diamonds</td></tr>","<tr><td>Queen</td><td>Diamonds</td></tr>","<tr><td>King</td><td>Diamonds</td></tr>","<tr><td>Ace</td><td>Diamonds</td></tr>");
foreach($Diamonds as $value) {
echo $value;
}
?>
</table>
<h5> List of cats </h5
<ul>
<?php
$cats = array("<li>American Bobtail</li>","<li>Aphrodite Giant</li>","<li>Arabin Mau</li>","<li>Asian</li>","<li>Balines</li>","<li>Bambino</li>");
foreach ($cats as $value) {
echo $value;
}
?>
</ul>
</body>
</html>


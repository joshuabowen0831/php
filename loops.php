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
</body>
</html>


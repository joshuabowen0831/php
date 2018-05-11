<html>
<head>
<title> Pet Form Information </title>
</head>
<body>
<h1> First form with all text fields </h1>
<p>
<?php
echo "Your pet's name is ".$_POST["Name"].".";
echo " It is ".$_POST["age"]." years old and is ".$_POST["weight"]." pounds.";
echo " Your pet is a ".$_POST["species"]." and is a ".$_POST["breed"].".";
?>


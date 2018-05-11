<html>
<head>
<title> Results of person contact form </title>
<body>
<?php
echo "<p>";
echo "Hello ".$_POST["First"]." ".$_POST["Last"].". ";
echo "I can see that you are ".$_POST["age"]." years old. ";
if ($_POST["age"] <= "12") {
echo "You must be a very cute kid.";
}
else if ($_POST["age"] >= 13 && $_POST["age"] <= 17) {
echo "You are a teenager but not yet an adult. Don't worry, you will get their soon.";
}
else if ($_POST["age"] >= 18 && $_POST["age"] <= 20) {
echo "It is a bummer that you can voat but not drink. Please voat Trump out of office.";
}
else if ($_POST["age"] >= 21 && $_POST["age"] <= 64) {
echo "Great! let's all go have a drink on you. You are so nice! ";
}
else if ($_POST["age"] >= 65) {
echo " You are very old! Have a drink you old person you. Here is your special letter from AARP";
}
switch ($_POST["Color"]) {
case "Blonde":
echo " I love your Blonde hair! Buy the way, how do you kill a blonde?, Put a scratch and sniff sticker on the bottom of a pool!";
break;
case "Black":
echo " Your hair is black, does that mean you like the night you vampire.";
break;
case "Brown":
echo " Your Brown hair reminds me of my grass when I forget to water it for a while.";
break;
default:
echo " You don't have Blonde, Black or Brown hair. If you want to see some funny stuff, try entering one of those three options into this little form.";
break;
}

?>
</p>
</body>
</html>


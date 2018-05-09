<html>
<head>
<title> Results of person contact form </title>
<body>
<?php
if ($_POST["age"] <= "12") {
echo "Grow up quicker";
}
elseif ($_POST["age"] > 13 && $_POST["age"] <= 17) {
echo "You are a teenager but not yet an adult. Don't worry, you will get their soon.";
}


?>


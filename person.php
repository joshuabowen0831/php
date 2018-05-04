<html>
<head>
<title> Person's information</title>
</head>
<body>
<?php
$first = "Joshua";
$last = "Bowen";
$age = 34;
$color = "green";
$height = "5 feet 4";
$weight = 400.8;
$minor = false;
echo <<<END
<p>
Hello, my name is $first $last.
I have $color eyes and am $age years old. I weigh $weight pounds. I am only $height tall and I am $minor a minor.
</p>
END
;
?>
</body>
</html>


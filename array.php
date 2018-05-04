<html>
<head>
<title> book list </title>
</head>
<body>
<?php
$books = array("title" => "The 100 best sex positions","author" => "Joshua Bowen","pages" => "350","publishing date" => "may 12, 2018");

echo <<<END
<h1> book list </h1>
<p>
The following is a book list made from an array.
END
;
echo "<ul>";
echo "<li> title: ".$books["title"];
echo "<li> author: ".$books["author"];
echo "<li> number of pages: ".$books["pages"];
echo "<li> publishing date: ".$books["publishing date"];
echo "</ul>";
?>
</p>
</body>
</html>

<?php

$name = $_GET["name"];
$email = $_GET["email"];
echo "Hello " .$name. ", we've have received your emails from " . $email . "!";
header("refresh:5;url=test.php");

?>
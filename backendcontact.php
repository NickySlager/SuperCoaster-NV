<?php 
$name = $_POST['name'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];

file_put_contents("contact.txt", $name .", " . $phoneNumber . "," . $email ,FILE_APPEND);
$msg = "<p> bedankt $Name voor het invullen van het formulier!</p>";
	header("location: index.php?msg=$msg");
?>
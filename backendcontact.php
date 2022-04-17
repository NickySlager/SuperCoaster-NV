<?php 
$name = $_POST['name'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
if (empty ($name))
{
    $errors[] = "Vul een naam in";
}
if (empty ($email))
{
    $errors[] = "Vul een email in";
}
if (empty ($phoneNumber))
{
    $errors[] = "Vul een TelefoonNummer  in";
}
if (!is_numeric($phoneNumber))
{
    $errors[] = "Vul een nummer met getallen in";
}
if(isset($errors))
{
    die(var_dump($errors));
}
file_put_contents("contact.txt", $name .", " . $phoneNumber . "," . $email . "\n" ,FILE_APPEND);
$msg = "<p> bedankt $name voor het invullen van het formulier!</p>";
header("location: index.php?msg=$msg");
?>
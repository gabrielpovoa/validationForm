<?php
session_start();
require('./template/header.php');

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email && $age){

    $expireIn = time() + (86400*30);
    setcookie('name', $name, $expireIn);

    echo "<h2>RECEIVED INFORMATIONS</h2> <br>";

    echo "Nome: ". ucfirst($name). "<br>";
    echo "Age: ". $age. "<br>";
    echo "Email: ". $email;
} else {

    $_SESSION['warn'] = "Fill the fields correctly.";

   header("Location: index.php");
   exit();
}
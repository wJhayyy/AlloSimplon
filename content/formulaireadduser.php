<?php

include_once('coalabdd.php');


 $firstname = htmlspecialchars($_POST['firstname']);
 $name = htmlspecialchars($_POST['name']);
 $email = htmlspecialchars($_POST['email']);
 $num =htmlspecialchars($_POST['num']);
 $password =password_hash($_POST['password'], PASSWORD_DEFAULT);


$add = $bdd->prepare("INSERT INTO user (firstname, name, email, num, password, id_role) VALUES (?, ?, ?, ?, ?, 1)");
$add->execute([$firstname, $name, $email, $num, $password]);





 header("Location: crud.php");
?>
<?php

require_once 'coalabdd.php';

// Récupération des données du formulaire
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$num = $_POST['num'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Vérification si l'utilisateur existe déjà dans la base de données
$stmt = $bdd->prepare("SELECT * FROM user WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();
if ($user) {
    die("L'utilisateur existe déjà");
}
if($password != $password)
    echo "Les mots de passes ne sont pas identique";

// Insertion de l'utilisateur dans la base de données
$stmt = $bdd->prepare("INSERT INTO user (email, password, num, firstname, name, id_role) VALUES (?, ?, ?, ?, ?, 1)");
$stmt->execute([$email, $password, $num, $firstname, $name]);


header("Location: signup.php");

?>
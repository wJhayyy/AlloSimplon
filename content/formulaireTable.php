<?php    

include_once('coalabdd.php');

$nom = $nom = htmlspecialchars($_POST['nom']);

$reqTable=$bdd->prepare("SELECT nom FROM films");
$reqTable->execute();

?>
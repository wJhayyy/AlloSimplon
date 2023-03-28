<?php

include_once('coalabdd.php');


 $nom_acteurs = htmlspecialchars($_POST['nom']);
 $prenom_acteurs = htmlspecialchars($_POST['firstname']);
 $description = htmlspecialchars($_POST['description']);
 $img_acteurs =htmlspecialchars($_POST['image']);


$add = $bdd->prepare("INSERT INTO acteurs (nom_acteurs, prenom_acteurs, img_acteurs, descriptions) VALUES (?, ?, ?, ?)");
$add->execute([$nom_acteurs, $prenom_acteurs, $img_acteurs, $description]);


 header("Location: crud.php");
?>
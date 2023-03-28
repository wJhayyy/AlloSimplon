<?php

include_once('coalabdd.php');


 $nom_real = htmlspecialchars($_POST['nom']);
 $prenom_real = htmlspecialchars($_POST['firstname']);
 $description_real = htmlspecialchars($_POST['description']);
 $img_real =htmlspecialchars($_POST['image']);


$add = $bdd->prepare("INSERT INTO realisateurs (nom_real, prenom_real, description_real, img_real) VALUES (?, ?, ?, ?)");
$add->execute([$nom_real, $prenom_real, $description_real, $img_real]);


 header("Location: crud.php");
?>
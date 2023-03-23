<?php

include_once('coalabdd.php');


 $nom = htmlspecialchars($_POST['nom']);
 $date = htmlspecialchars($_POST['date']);
 $trailer = htmlspecialchars($_POST['trailer']);
 $categorie =htmlspecialchars($_POST['categorie']);
 $synopsis = htmlspecialchars($_POST['synopsis']);
 $image = htmlspecialchars($_POST['image']);

 $add = $bdd->prepare("INSERT INTO films (nom, date, trailer, categorie, synopsis, image) VALUES (:nom, :date, :trailer, :categorie, :synopsis, :image)");
$add->bindParam(':nom', $nom);
$add->bindParam(':date', $date);
$add->bindParam(':trailer', $trailer);
$add->bindParam(':categorie', $categorie);
$add->bindParam(':synopsis', $synopsis);
$add->bindParam(':image', $image);
$add->execute();




 header("Location: crud.php");
?>
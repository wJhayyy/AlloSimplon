<?php

$host = 'localhost';
$dbname = 'allosimplon';
$username = 'root';
$password = 'root';

$bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); 


$id_film = "";
$nom= "";
$date = "";
$trailer = "";
$categorie = "";
$synopsis = "";

$errorMessage ="";
$sucessMessage ="";

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

    if (!isset ($_POST["id_film"])){
        $errorMessage = "L'identifiant du film n'a pas été spécifié";
    } else {

        $id_film = $_POST["id_film"];

        $sql = "SELECT * FROM films WHERE id_film = ?";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$id_film]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $id_film = $row["id_film"];
        $nom = $row["nom"];
        $date = $row["date"];
        $trailer = $row["trailer"];
        $categorie = $row["categorie"];
        $synopsis = $row["synopsis"];

        $sql = "UPDATE films " .
                "SET nom = ?, date = ?, trailer = ?, categorie = ?, synopsis = ? " .
                "WHERE id_film = ?";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$nom, $date, $trailer, $categorie, $synopsis, $id_film]);

        $sucessMessage = "Le film a été modifié avec succès";
    }
}

header("location: crud.php")

?>


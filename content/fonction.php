<?php


     // informations de connexion à la base de données

$host = 'localhost';
$dbname = 'allosimplon';
$username = 'root';
$password = 'root';

// connexion à la base de données avec PDO

try {
  $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  // Activer les erreurs PDO
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Erreur de connexion à la base de données : " . $e->getMessage();
}




function addFilm($nom, $date, $trailer, $categorie, $synopsis, $image)
{

    
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
}

function delete($id_film)
{
    try{
    $delete = $bdd; 
    $delReq = "DELETE FROM films where id = '$id_film' ";
    $stmt = $delete->query($delete);
    $stmt = execute();
    
}

catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();

    header("Location: crud.php");

}

}

function readFilm($id_film)
{


}

function modifyFilm($id_film, $nom, $date, $trailer, $categorie, $synopsis, $image)
{
    
}

?>
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

?>
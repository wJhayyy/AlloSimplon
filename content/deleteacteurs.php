<?php



if (isset($_POST["id"])) {
    $id_acteurs = $_POST["id"];

    $host = 'localhost';
    $dbname = 'allosimplon';
    $username = 'root';
    $password = 'root';

    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); 

    $sql = "DELETE FROM acteurs WHERE id_acteurs=:id_acteurs";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id_acteurs', $id_acteurs, PDO::PARAM_INT);
    $stmt->execute();
}

header("location: crud.php");
exit;

?>
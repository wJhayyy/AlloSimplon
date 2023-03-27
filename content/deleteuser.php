<?php



if (isset($_POST["id"])) {
    $id_film = $_POST["id"];

    $host = 'localhost';
    $dbname = 'allosimplon';
    $username = 'root';
    $password = 'root';

    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); 

    $sql = "DELETE FROM user WHERE id_user=:id_user";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id_user', $id_film, PDO::PARAM_INT);
    $stmt->execute();
}

header("location: crud.php");
exit;

?>
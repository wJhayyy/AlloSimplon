<?php
session_start(); // Démarre la session


require_once 'coalabdd.php';

if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Préparer la requête pour récupérer l'utilisateur avec l'email
    $stmt = $bdd->prepare("SELECT * FROM user WHERE email = :e");
    $stmt->execute(['e' => $email]);
    $user = $stmt->fetch();
    
    if($user) {
        if(password_verify($password, $user['password'])) {
            // Stocker le message dans la variable de session


            $req = $bdd->prepare('SELECT * FROM user WHERE email = "$email"');
            $req -> execute();
            $usser = $req->fetch();
            
            $_SESSION['email']=$user['email'];
            $_SESSION['num']=$user['num'];
            $_SESSION['password']=$user['password'];
            $_SESSION['name']=$user['name'];
            $_SESSION['firstname']=$user['firstname'];
            $_SESSION['id_role']=$user['id_role'];  

            // Rediriger l'utilisateur vers la page index.php
            header("Location: ../index.php");

            exit(); // Arrêter l'exécution du script pour éviter l'envoi de données supplémentaires
        } else {
            // Stocker le message dans la variable de session
            $_SESSION['message'] = "Le mot de passe est incorrect.";
            
            // Rediriger l'utilisateur vers la page connexion.php
            header("Location: film.php");
            exit(); // Arrêter l'exécution du script pour éviter l'envoi de données supplémentaires
        }
    } else {
        // Stocker le message dans la variable de session
        $_SESSION['message'] = "Les identifiants sont incorrects.";
        
        // Rediriger l'utilisateur vers la page connexion.php
        header("Location: pagefilm.php");
        exit(); // Arrêter l'exécution du script pour éviter l'envoi de données supplémentaires
    }
}

?>
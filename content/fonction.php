<?php

function ajouter($nom, $desc, $prix, $quantité, $image)
{
    if(require("content/configuration/connexionbdd.php"))
    {
        $req = $bdd->prepare("INSERT INTO produit (nom, description, prix, quantite_dispo, image) VALUES ($nom, $desc, $prix, $quantité, $image)");
        $req->execute(array($nom, $desc, $prix, $quantité, $image));
        $req->closeCursor();
    }
}

function afficher()
{
    if(require("config.php"))
    {
        $req=$bdd->prepare("SELECT * FROM produit ORDER BY id DESC");

        $req->execute(array($id));

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
    }
}

function supprimer($id)
{
    if(require("config.php"))
    {
        $req = $bdd->prepare("DELETE FROM produit WERE id=?");

        $req->execute(array($id));
    }
}

?>
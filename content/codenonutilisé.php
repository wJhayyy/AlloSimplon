
<!-- BARRE DE RECHERCHER -->


<form method="GET">
                <input type="search" name="s" placeholder="Rechercher un film">
                <input type ="submit" name="Envoyer">
            </form>


            
<?php
$allfilm = $bdd->query("SELECT * FROM films");
if(isset($_GET['s']) AND !empty($_GET['s'])){
    $recherche = htmlspecialchars($_GET['s']);
    $allusers = $bdd->query('SELECT nom FROM films WHERE nom LIKE "%'.$recherche.'%" ');
}
?>



<?php 
    if($allfilm->rowCount() > 0){
        while($films = $allfilm->fetch()){
            ?>
            <p><?= $films ['nom']; ?></p>
            <?php
        }
    }   else {
        ?>
        <p> Aucune film trouvé </p>
    <?php
    }
?>
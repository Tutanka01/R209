<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/styles/styles_plats.css">
    <title>Plat</title>
</head>
<body>
    <!--code pour recuperer le plat envoye par le formulaire de la page mainpage.php -->
    <div class="banner">
        <div class="titre">
            <h1>Mascaroni.fr</h1>
        </div>
        <div class="panier">
            <button>Panier</button>
        </div>
    </div>
    <div class="container">
        <?php
            $db = new SQLite3('sqlite.sqlite');
            // recuperation des donnes du formulaire
            $id_plat = $_POST['id_plat'];
            ?>
        <div class="plat">
            <?
                $sql = "SELECT DISTINCT * FROM plat WHERE ID_plat = '".$id_plat."'";
                $results = $db->query($sql);
                while ($row = $results->fetchArray()) {
                    echo "<img src='".$row['Lien']."' alt='".$row['nom_plat']."'>";
                }
            ?>
        </div>
        <div class="ingredients">
            <p>Description :</p>
            <?
                $sql = "SELECT DISTINCT * FROM plat WHERE ID_plat = '".$id_plat."'";
                $results = $db->query($sql);
                while ($row = $results->fetchArray()) {
                    echo "<p>".$row['description']."</p>";
                }
            ?>
            <p>Ingredients :</p>
            <?
                $sql = "SELECT DISTINCT * FROM plat WHERE ID_plat = '".$id_plat."'";
                $results = $db->query($sql);
                while ($row = $results->fetchArray()) {
                    echo "<p>".$row['ingredient']."</p>";
                }
            ?>
        </div>
        <div class="cats">
            <p>Categories :</p>
            <?
                $sql = "SELECT plat.*, categorie.* 
                    FROM plat 
                    JOIN categorie ON plat.ID_plat = categorie.ID_plat 
                    WHERE plat.ID_plat = '$id_plat'";
                var_dump($sql);
                $results = $db->query($sql);
                while ($row = $results->fetchArray()) {
                    echo "<p>".$row['nom_categorie']."</p>";
                }
            ?>
        </div>
        <div class="actions">
            <button>Retirer du panier</button>
            <button>Ajouter au panier</button>
        </div>
        <div class="descriptif">
            <p></p>
        </div>
        <div class="prix">
            <p>15€</p>
        <p>Premier test php n°<?php echo date("H:i:s") ; ?></p>
        </div>
    </div>
</body>
</html>
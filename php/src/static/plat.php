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
    <div class="banner">
        <div class="titre">
            <h1>Mascaroni.fr</h1>
        </div>
        <div class="panier">
            <button>Panier</button>
        </div>
    </div>
    <div class="container">
        <div class="plat">
            <?php
            $db = new SQLite3('sqlite.sqlite');

            $img = "SELECT DISTINCT Lien FROM plat WHERE ID_plat='P1'";
            $results = $db->query($img);
            while ($donnees=$results->fetchArray())
                echo "img src='".$donnees[0]."' alt='Plat1'";
            ?>
        </div>
        <div class="ingredients">
            <?php

            $sql = "SELECT DISTINCT * FROM plat WHERE ID_plat='P1'";
            $results = $db->query($sql);
            while ($donnees=$results->fetchArray())
                {
                echo '<h2>'.$donnees[1].'</h2>';
                }
            ?>
            <p>Ingredients :</p>
            <p>Mais, legumes, viande</p>
        </div>
        <div class="cats">
            <p>Categories :</p>
            <?php
            $req2 = "SELECT DISTINCT * FROM categorie WHERE ID_plat = 'P1'";
            $results2 = $db->query($req2);
            while ($donnes=$results2->fetchArray())
                {
                    if ($donnes[1]==1)
                        echo 'chaud, ';
                    if ($donnes[2]==1)
                        echo 'froid, ';
                    if ($donnes[3]==1)
                        echo 'entrée, ';
                    if ($donnes[4]==1)
                        echo 'plat, ';
                    if ($donnes[5]==1)
                        echo 'dessert, '; 
                    echo 'recette "fait maison".';
                }

                
            $db->close();
            ?>
        </div>
        <div class="actions">
            <button>Retirer du panier</button>
            <button>Ajouter au panier</button>
        </div>
        <div class="descriptif">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum inventore suscipit numquam quia expedita nesciunt distinctio, consequuntur, dolore sed earum, facere sunt natus nemo aut et? Quas a quam eaque?</p>
        </div>
        <div class="prix">
            <p>15€</p>
        <p>Premier test php n°<?php echo date("H:i:s") ; ?></p>
        </div>
    </div>
</body>
</html>
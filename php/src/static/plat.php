<?session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_plats.css">
    <title>Plat</title>
</head>
<body>
    <!--code pour recuperer le plat envoye par le formulaire de la page mainpage.php -->
    <div class="banner">
        <div class="titre">
            <a href="mainapage.php"><h1>Mascaroni.fr</h1></a>
        </div>
        <div class="panier">
            <button>Panier</button>
        </div>
    </div>
    <div class="container">
        <?
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
        <?
                $sql = "SELECT DISTINCT * FROM plat WHERE ID_plat = '".$id_plat."'";
                $results = $db->query($sql);
                while ($row = $results->fetchArray()) {
                    echo "<h1>".$row['nom_plat']."</h1>";
                }
            ?>
            <h4>Description :</h4>
            <?
                while ($row = $results->fetchArray()) {
                    echo "<p>".$row['description']."</p>";
                }
            ?>
            <h4>Ingredients :</h4>
            <?
                $sql = "SELECT DISTINCT * FROM plat WHERE ID_plat = '".$id_plat."'";
                $results = $db->query($sql);
                while ($row = $results->fetchArray()) {
                    echo "<p>".$row['ingredient']."</p>";
                }
            ?>
        </div>
        <div class="cats">
            <h4>Categories :</h4>
            <?
                $sql = "SELECT DISTINCT * FROM categorie WHERE ID_plat = '".$id_plat."'";
                $results = $db->query($sql);
                while ($row=$results->fetchArray())
                    {
                    if ($row[1]==1)
                        echo '<li>chaud</li>';
                    if ($row[2]==1)
                        echo '<li>froid</li>';
                    if ($row[3]==1)
                        echo '<li>entrée</li>';
                    if ($row[4]==1)
                        echo '<li>plat</li>';
                    if ($row[5]==1)
                        echo '<li>dessert</li>'; 
                    }
            ?>
        </div>
        <div class="actions">
            <form action="script_ajout_retirer_panier.php?action=retirer&id_plat=<?=$id_plat?>" method="post">
                <button >Retirer du panier</button>
            </form>
            <form action="script_ajout_retirer_panier.php?action=ajouter&id_plat=<?=$id_plat?>" method="post">
                <button>Ajouter au panier</button>
            </form>
        </div>
        <div class="descriptif">
            <p></p>
        </div>
        <div class="prix">
        <?
            $sql = "SELECT DISTINCT * FROM plat WHERE ID_plat = '".$id_plat."'";
            $results = $db->query($sql);
            while ($row=$results->fetchArray()) {
                echo "<h5 style='color:red'>Prix de l'article : ".$row['prix']."€ </h5>";
            }
        ?>
        <div class="container">
            <p>Avis :</p>
        </div>
        </div>
    </div>
</body>
</html>
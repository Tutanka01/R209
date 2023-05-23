<?php
session_start();
if (isset($_SESSION['user'])){
} else {
    header("Location: connexion.php?error=not_connected");
}

$user = $_SESSION['user'];
$id_user = $_SESSION['id_user'];
$db = new SQLite3('sqlite.sqlite');
$total = 0;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_panier.css">
    <title>Panier</title>
</head>
<body>
    <div class="banner">
        <div class="titre">
            <a href="mainapage.php"><h1>Mascaroni.fr</h1></a>
        </div>
        <div class="panier">
            <button>Panier</button>
        </div>
    </div>

    <div class="container">
        <div class="titre">
            <h1>Panier</h1>
        </div>
        <div class="liste_produits">
            <ul>
                <?php
                $db = new SQLite3('sqlite.sqlite');
                $total = 0;
                $plats = array(); // tableau contenant les ID des plats dans le panier
                $sql = "SELECT * 
                        FROM plat
                        JOIN panier ON plat.ID_plat = panier.ID_plat
                        WHERE panier.ID_user = '".$id_user."'"; 
                $results = $db->query($sql);
                while ($row = $results->fetchArray()) {
                    $montant = $row['QTE'] * $row['prix']; // calcul du montant
                    $total += $montant; // calcul du total
                    $plats[] = $row['ID_plat']; // ajout de l'ID du plat dans le tableau
                    echo "<li>".$row['nom_plat']."<p> Prix unité : ".$row['prix']." €</p><p>Quantité : ".$row['QTE']."</p><p>Montant : ".$montant." €</p>
                    <img src='".$row['Lien']."' alt='".$row['nom_plat']."'>
                    <form action='script_ajout_retirer_panier.php?action=retirer&id_plat=".$row['ID_plat']."&from_panier=1' method='post'>
                        <button>Retirer du panier</button>
                    </form>
                    <form action='script_ajout_retirer_panier.php?action=ajouter&id_plat=".$row['ID_plat']."&from_panier=1' method='post'>
                        <button>Ajouter au panier</button>
                    </form>
                    </li>";
                }
                ?>     
            </ul>
        </div>
        <div class="total">
            <p>Total : <?php echo $total; ?> €</p>
        </div>
        <div class="commander">
            <?$plats = implode(',', $plats); // on transforme le tableau en string (séparé par des virgules)?>
            <form action="script_ajout_retirer_panier.php" method="post">
                <input type="hidden" name="total" value="<?php echo $total; ?>">
                <input type="hidden" name="Id_plats" value="<?php echo $plats;?>">
                <input type="hidden" name="action" value="commander">
                <button>Commander</button>
            </form>
        </div>
    </div>
</body>
</html>

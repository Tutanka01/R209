<?session_start();
$user = $_SESSION['user'];
$id_user = $_SESSION['id_user'];
echo $id_user;
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
            <h1>Mascaroni.fr</h1>
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
                <? 
                    $db = new SQLite3('sqlite.sqlite');
                    $sql = "SELECT *
                            FROM plat
                            JOIN panier ON plat.ID_plat = panier.ID_plat
                            WHERE panier.ID_user = '".$id_user."'"; 
                    $results = $db->query($sql);
                    while ($row = $results->fetchArray()) {
                        echo "<li>".$row['nom_plat']."</li>";
                    }
                ?>
            </ul>
        </div>
        <div class="total">
            <p>Total : 10k €</p>
    </div>
    <div class="commander">
        <button>Commander</button>
    </div>
</body>
</html>
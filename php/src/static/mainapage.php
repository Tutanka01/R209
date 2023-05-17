<?
    session_start();
    // Si on ajoute un plat au panier on affiche cd message
    // La variabl is_add est utilisee/declaree dans le fichier panier.php
    if (isset($_SESSION['is_add'])) {
        $is_add = $_SESSION['is_add'];
        echo "<script>alert('Plat ajoute');</script>";
        unset($_SESSION['is_add']); 
    // Si on enleve un plat au panier on affiche ce message
    } elseif (isset($_SESSION['is_remove'])) {
        $is_add = $_SESSION['is_remove'];
        echo "<script>alert('Plat enleve');</script>";
        unset($_SESSION['is_remove']);
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles_mainpage.css">
    <title>Mainpage</title>
</head>
<body>  
    <div class="banner">
        <div class="titre">
            <a href="mainapage.php"><h1>Mascaroni.fr</h1></a>
        </div>
        <div class="boutons">
            <div class="connexion">
            <?
                    if (isset($_SESSION['user'])) {
                        echo "<div class='decobutton'>";
                            echo "<form action='connexion.php?deconnexion=1' method='POST'>";
                            echo "<button class='deconnexion-button'>Déconnexion</button>";
                            echo "</form>";
                        echo "</div>";
                    } else {
                        echo "<form action='connexion.php' method='POST'>";
                            echo "<button class='connexion-button'>Connexion</button>";
                        echo "</form>";
                    }                    
                ?>
            </div>
        </div>    
        <div class="panier">
            <form action="panier.php" method="POST">
                <button>Panier</button>
            </form>
        </div>
    </div>
    <div class="container">
        <h1>Quel plat voulez vous ?</h1>
        <form action="recherche_plat.php" method="POST">
          <input type="text" name="plat" placeholder="ex : 'Tajine' ">
          <input type="submit" value="Chercher">
        </form>
    </div>
    <?php
// Code de connexion à votre base de données SQLite
$db = new SQLite3('sqlite.sqlite');

// Récupération des noms des colonnes (catégories) de la table 'categorie'
$sql = "PRAGMA table_info(categorie)";
$results = $db->query($sql);

// Création d'un tableau pour stocker les noms des colonnes (catégories)
$categories = array();

// Parcours des résultats et récupération des noms des colonnes (catégories)
while ($row = $results->fetchArray()) {
    // Le nom de la colonne se trouve dans la colonne "name"
    $columnName = $row['name'];
    
    // Ignorer les colonnes non pertinentes (comme la clé primaire)
    if ($columnName !== 'ID_plat') {
        $categories[] = $columnName;
    }
}

// Affichage des catégories dans votre HTML
echo '<div>';
echo '<div class="lsite">';
echo '<div class="container_lsite">';
echo '<ul class="ulo">';
foreach ($categories as $category) {
    echo '<li class="lsite-item">';
    echo '<form action="recherche_plat.php?type=' . urlencode($category) . '" method="POST">';
    echo '<input type="hidden" name="plat" value="' . htmlspecialchars($category) . '">';
    echo '<button type="submit">' . htmlspecialchars($category) . '</button>';
    echo '</form>';
    echo '</li>';
}
echo '</ul>';
echo '</div>';
echo '</div>';
echo '</div>';
?>

</body>
</html>

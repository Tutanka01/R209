<?php
$db = new SQLite3('sqlite.sqlite');
$propriete = $_GET['propriete'];

if ($propriete === 'user') {
    $type = 'user';
    $label = 'Utilisateurs';
    $sql = "SELECT * FROM user";
} elseif ($propriete === 'categorie') {
    $type = 'categorie';
    $label = 'Catégories';
    $sql = "SELECT * FROM categorie";
} elseif ($propriete === 'plat') {
    $type = 'plat';
    $label = 'Plats';
    $sql = "SELECT * FROM plat";
} else {
    // Gérer le cas où la propriété n'est pas valide
    echo "Propriété non valide";
    exit;
}

$results = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_admin.css">
    <title>Admin - Liste des <?php echo $label; ?></title>
</head>
<body>
    <div class="banner">
        <div class="titre">
            <a href="admin.php"><h1>Mascaroni.fr</h1></a>
        </div>
        <div class="boutons">
            <div class="connexion">
                <form action="connexion.php" method="POST">
                    <button class="connexion-button">Connexion</button>
                </form>
            </div>
        </div>
    </div>

    <h2>Liste des <?php echo $label; ?></h2>

    <?php while ($row = $results->fetchArray()): ?>
        <div class="user-row">
            <?php if ($type === 'user'): ?>
                <span class="user-field">ID :</span>
                <span class="user-value"><?php echo $row['ID_user']; ?></span>
            <?php elseif ($type === 'categorie'): ?>
                <span class="user-field">ID du plat :</span>
                <span class="user-value"><?php echo $row['ID_plat']; ?></span>
            <?php elseif ($type === 'plat'): ?>
                <span class="user-field">ID du plat :</span>
                <span class="user-value"><?php echo $row['ID_plat']; ?></span>
            <?php endif; ?>

            <?php if ($type === 'user'): ?>
                <span class="user-field">Login :</span>
                <span class="user-value"><?php echo $row['login']; ?></span>
                <span class="user-field">Permission :</span>
                <span class="user-value"><?php echo $row['perm']; ?></span>
            <?php elseif ($type === 'categorie'): ?>
                <span class="user-field">Chaud :</span>
                <span class="user-value"><?php echo $row['chaud']; ?></span>
                <span class="user-field">Froid :</span>
                <span class="user-value"><?php echo $row['froid']; ?></span>
                <span class="user-field">Entrée :</span>
                <span class="user-value"><?php echo $row['entree']; ?></span>
                <span class="user-field">Plat :</span>
                <span class="user-value"><?php echo $row['plat']; ?></span>
                <span class="user-field">Dessert :</span>
                <span class="user-value"><?php echo $row['dessert']; ?></span>
            <?php elseif ($type === 'plat'): ?>
                <span class="user-field">Nom du plat :</span>
                <span class="user-value"><?php echo $row['nom_plat']; ?></span>
                <span class="user-field">Spécificité :</span>
                <span class="user-value"><?php echo $row['spécificité']; ?></span>
                <span class="user-field">Prix :</span>
                <span class="user-value"><?php echo $row['prix']; ?></span>
                <span class="user-field">Auteur :</span>
                <span class="user-value"><?php echo $row['auteur']; ?></span>
                <span class="user-field">Image :</span>
                <span class="user-value"><?php echo "<img src='".$row['Lien']."'>"; ?></span>
                <span class="user-field">Description :</span>
                <span class="user-value"><?php echo $row['description']; ?></span>
                <span class="user-field">Ingrédient :</span>
                <span class="user-value"><?php echo $row['ingredient']; ?></span>
            <?php endif; ?>
                </div>
            <?php endwhile; ?>

</body>
</html>

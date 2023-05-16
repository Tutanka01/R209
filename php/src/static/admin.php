<? session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
}
if (isset($_GET['modif'])) {
    echo "<script>alert('Modification effectuée')</script>";
} elseif (isset($_GET['suppr'])) {
    echo "<script>alert('Suppression effectuée')</script>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_admin.css">
    <title>Admin</title>
</head>
<body>
<div class="banner">
        <div class="titre">
            <a href="mainapage.php"><h1>Mascaroni.fr</h1></a>
        </div>
        <div class="boutons">
            <div class="connexion">
                <form action="connexion.php" method="POST">
                    <button class="connexion-button">Connexion</button>
                </form>
            </div>
        </div>    
</div>

    <div class="button">
        <form action="admin_liste.php" method="POST">
            <input type="hidden" name="type" value="user">
            <button type="submit">User</button>
        </form>
    </div>
    <div class="button">
        <form action="admin_liste.php" method="POST">
            <input type="hidden" name="type" value="categorie">
            <button type="submit">Catégorie</button>
        </form>
    </div>
    <div class="button">
        <form action="admin_liste.php" method="POST">
            <input type="hidden" name="type" value="plat">
            <button type="submit">Plat</button>
        </form>
    </div>
    <form action="admin_gestion.php" method="POST">
        <div class="button">
            <input type="hidden" name="type" value="Gestion">
            <button type="submit">Gestionnaire</button>
    </div>
    </form>


</body>
</html>
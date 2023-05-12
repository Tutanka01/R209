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
            <h1>Mascaroni.fr</h1>
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
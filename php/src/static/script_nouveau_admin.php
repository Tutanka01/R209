<?php
$db = new SQLite3('sqlite.sqlite');
$action = $_GET['action'];
$propriete = $_GET['propriete'];

if ($action === 'modif') {
    if ($propriete === 'user') {
        $user_id = $_GET['user_id'];
        // Récupérer les données de l'utilisateur à modifier
        $query = "SELECT * FROM user WHERE ID_user = '$user_id'";
        $result = $db->query($query);
        $user = $result->fetchArray(SQLITE3_ASSOC);

        // Afficher le formulaire de modification
        echo "
        <!DOCTYPE html>
        <html lang='fr'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='styles/styles_admin.css'>
            <title>Admin - Modification d'utilisateur</title>
        </head>
        <body>
            <div class='banner'>
                <div class='titre'>
                    <a href='admin.php'><h1>Mascaroni.fr</h1></a>
                </div>
                <div class='boutons'>
                    <div class='connexion'>
                        <form action='connexion.php' method='POST'>
                            <button class='connexion-button'>Connexion</button>
                        </form>
                    </div>
                </div>
            </div>

            <h2>Modification de l'utilisateur</h2>

            <form action='script_nouveau_admin.php' method='POST'>
                <input type='hidden' name='action' value='modifier_utilisateur'>
                <input type='hidden' name='user_id' value='$user_id'>

                <label for='login'>Login :</label>
                <input type='text' id='login' name='login' value='{$user['login']}' required>

                <label for='passwd'>Mot de passe :</label>
                <input type='password' id='passwd' name='passwd' required>

                <label for='perm'>Permission :</label>
                <select id='perm' name='perm' required>
                    <option value='admin' ".($user['perm'] === 'admin' ? 'selected' : '').">Admin</option>
                    <option value='utilisateur' ".($user['perm'] === 'utilisateur' ? 'selected' : '').">Utilisateur</option>
                </select>

                <button type='submit'>Enregistrer</button>
            </form>
        </body>
        </html>
        ";
    } elseif ($propriete === 'categorie') {
        $categorie_id = $_GET['categorie_id'];
        // Récupérer les données de la catégorie à modifier
        $query = "SELECT * FROM categorie WHERE ID_plat = '$categorie_id'";
        $result = $db->query($query);
        $categorie = $result->fetchArray(SQLITE3_ASSOC);

        // Afficher le formulaire de modification
        echo "
        <!DOCTYPE html>
        <html lang='fr'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='styles/styles_admin.css'>
            <title>Admin - Modification de catégorie</title>
        </head>
        <body>
            <div class='banner'>
                <div class='titre'>
                    <a href='admin.php'><h1>Mascaroni.fr</h1></a>
                </div>
                <div class='boutons'>
                    <div class='connexion'>
                        <form action='connexion.php' method='POST'>
                            <button class='connexion-button'>Connexion</button>
                        </form>
                    </div>
                </div>
            </div>

            <h2>Modification de la catégorie</h2>

            <form action='script_nouveau_admin.php' method='POST'>
                <input type='hidden' name='action' value='modifier_categorie'>
                <input type='hidden' name='categorie_id' value='$categorie_id'>

                <label for='chaud'>Chaud :</label>
                <input type='number' id='chaud' name='chaud' value='{$categorie['chaud']}'>

                <label for='froid'>Froid :</label>
                <input type='number' id='froid' name='froid' value='{$categorie['froid']}'>

                <label for='entree'>Entrée :</label>
                <input type='number' id='entree' name='entree' value='{$categorie['entree']}'>

                <label for='plat'>Plat :</label>
                <input type='number' id='plat' name='plat' value='{$categorie['plat']}'>

                <label for='dessert'>Dessert :</label>
                <input type='number' id='dessert' name='dessert' value='{$categorie['dessert']}'>

                <button type='submit'>Enregistrer</button>
            </form>
        </body>
        </html>
        ";
    } elseif ($propriete === 'plat') {
        $plat_id = $_GET['plat_id'];
        // Récupérer les données du plat à modifier
        $query = "SELECT * FROM plat WHERE ID_plat = '$plat_id'";
        $result = $db->query($query);
        $plat = $result->fetchArray(SQLITE3_ASSOC);

        // Afficher le formulaire de modification
        echo "
        <!DOCTYPE html>
        <html lang='fr'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='styles/styles_admin.css'>
            <title>Admin - Modification de plat</title>
        </head>
        <body>
            <div class='banner'>
                <div class='titre'>
                    <a href='admin.php'><h1>Mascaroni.fr</h1></a>
                </div>
                <div class='boutons'>
                    <div class='connexion'>
                        <form action='connexion.php' method='POST'>
                            <button class='connexion-button'>Connexion</button>
                        </form>
                    </div>
                </div>
            </div>

            <h2>Modification du plat</h2>

            <form action='script_nouveau_admin.php' method='POST'>
                <input type='hidden' name='action' value='modifier_plat'>
                <input type='hidden' name='plat_id' value='$plat_id'>

                <label for='nom_plat'>Nom du plat :</label>
                <input type='text' id='nom_plat' name='nom_plat' value='{$plat['nom_plat']}' required>

                <label for='specificite'>Spécificité :</label>
                <input type='text' id='specificite' name='specificite' value='{$plat['spécificité']}'>

                <label for='prix'>Prix :</label>
                <input type='number' id='prix' name='prix' value='{$plat['prix']}' required>

                <label for='auteur'>Auteur :</label>
                <input type='text' id='auteur' name='auteur' value='{$plat['auteur']}' required>

                <label for='lien'>Lien :</label>
                <input type='text' id='lien' name='lien' value='{$plat['Lien']}' required>

                <label for='description'>Description :</label>
                <textarea id='description' name='description' required>{$plat['description']}</textarea>

                <label for='ingredient'>Ingrédient :</label>
                <textarea id='ingredient' name='ingredient' required>{$plat['ingredient']}</textarea>

                <button type='submit'>Enregistrer</button>
            </form>
        </body>
        </html>
        ";
    }
} elseif ($action === 'modifier_utilisateur') {
    $user_id = $_POST['user_id'];
    $login = $_POST['login'];
    $passwd = $_POST['passwd'];
    $perm = $_POST['perm'];

    // Mettre à jour l'utilisateur dans la base de données
    $query = "UPDATE user SET login='$login', passwd='$passwd', perm='$perm' WHERE ID_user='$user_id'";
    $db->exec($query);

    // Rediriger vers la page d'administration
    header('Location: admin.php');
    exit();
} elseif ($action === 'modifier_categorie') {
    $categorie_id = $_POST['categorie_id'];
    $chaud = $_POST['chaud'];
    $froid = $_POST['froid'];
    $entree = $_POST['entree'];
    $plat = $_POST['plat'];
    $dessert = $_POST['dessert'];

    // Mettre à jour la catégorie dans la base de données
    $query = "UPDATE categorie SET chaud='$chaud', froid='$froid', entree='$entree', plat='$plat', dessert='$dessert' WHERE ID_plat='$categorie_id'";
    $db->exec($query);

    // Rediriger vers la page d'administration
    header('Location: admin.php');
    exit();
} elseif ($action === 'modifier_plat') {
    $plat_id = $_POST['plat_id'];
    $nom_plat = $_POST['nom_plat'];
    $specificite = $_POST['specificite'];
    $prix = $_POST['prix'];
    $auteur = $_POST['auteur'];
    $lien = $_POST['lien'];
    $description = $_POST['description'];
    $ingredient = $_POST['ingredient'];

    // Mettre à jour le plat dans la base de données
    $query = "UPDATE plat SET nom_plat='$nom_plat', spécificité='$specificite', prix='$prix', auteur='$auteur', Lien='$lien', description='$description', ingredient='$ingredient' WHERE ID_plat='$plat_id'";
    $db->exec($query);

    // Rediriger vers la page d'administration
    header('Location: admin.php');
    exit();
}

$db->close();
?>

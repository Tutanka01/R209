<?php
$db = new SQLite3('sqlite.sqlite');

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $propriete = isset($_GET['propriete']) ? $_GET['propriete'] : null;
} elseif (isset($_POST['action'])) {
    $action = $_POST['action'];
    $propriete = isset($_POST['propriete']) ? $_POST['propriete'] : null;
} else {
    $action = null;
    $propriete = null;
}

if ($action === 'modifier_utilisateur') {
    $user_id = $_POST['user_id'];
    $login = $_POST['login'];
    $passwd = $_POST['passwd'];
    $perm = $_POST['perm'];

    // Mettre à jour l'utilisateur dans la base de données
    $query = "UPDATE user SET login='$login', passwd='$passwd', perm='$perm' WHERE ID_user='$user_id'";
    $db->exec($query);

    // Rediriger vers la page d'administration
    header('Location: admin.php?modification=1');
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
    header('Location: admin.php?modification=1');
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
    header('Location: admin.php?modification=1');
    exit();
} elseif ($action === 'ajouter_utilisateur') {
        $login = $_POST['login'];
        $passwd = $_POST['passwd'];
        $perm = $_POST['perm'];

        // Ajouter l'utilisateur dans la base de données
        $query = "INSERT INTO user (login, passwd, perm) VALUES ('$login', '$passwd', '$perm')";
        $db->exec($query);

        // Rediriger vers la page d'administration
        header('Location: admin.php?ajout=1');
        exit();
} elseif ($action === 'ajouter_categorie') {
        $chaud = $_POST['chaud'];
        $froid = $_POST['froid'];
        $entree = $_POST['entree'];
        $plat = $_POST['plat'];
        $dessert = $_POST['dessert'];

        // Ajouter la catégorie dans la base de données
        $query = "INSERT INTO categorie (chaud, froid, entree, plat, dessert) VALUES ('$chaud', '$froid', '$entree', '$plat', '$dessert')";
        $db->exec($query);

        // Rediriger vers la page d'administration
        header('Location: admin.php?ajout=1');
        exit();
} elseif ($action === 'ajouter_plat') {
        $nom_plat = $_POST['nom_plat'];
        $specificite = $_POST['specificite'];
        $prix = $_POST['prix'];
        $auteur = $_POST['auteur'];
        $lien = $_POST['lien'];
        $description = $_POST['description'];
        $ingredient = $_POST['ingredient'];

        // Ajouter le plat dans la base de données
        $query = "INSERT INTO plat (nom_plat, spécificité, prix, auteur, Lien, description, ingredient) VALUES ('$nom_plat', '$specificite', '$prix', '$auteur', '$lien', '$description', '$ingredient')";
        $db->exec($query);

        // Rediriger vers la page d'administration
        header('Location: admin.php?ajout=1');
        exit();
} elseif ($action === 'suppr' && $propriete === 'user') {
    $user_id = $_GET['user_id'];

    // Supprimer l'utilisateur de la base de données
    $query = "DELETE FROM user WHERE ID_user='$user_id'";
    $db->exec($query);

    // Rediriger vers la page d'administration
    header('Location: admin.php?suppression=1');
    exit();
} elseif ($action === 'suppr' && $propriete === 'categorie') {
    $categorie_id = $_GET['categorie_id'];

    // Supprimer la catégorie de la base de données
    $query = "DELETE FROM categorie WHERE ID_plat='$categorie_id'";
    $db->exec($query);

    // Rediriger vers la page d'administration
    header('Location: admin.php?suppression=1');
    exit();
} elseif ($action === 'suppr' && $propriete === 'plat') {
    $plat_id = $_GET['plat_id'];
    
    // Supprimer le plat de la base de données
    $query = "DELETE FROM plat WHERE ID_plat='$plat_id'";
    $db->exec($query);
    header('Location: admin.php?suppression=1');
    exit();
}
?>

<?
$db = new SQLite3('sqlite.sqlite');

if (isset($_GET['action'])){
    $action = $_GET['action'];
    $propriete = $_GET['propriete'];

} elseif (isset($_POST['action'])){
    $action = $_POST['action'];
    $propriete = $_POST['propriete'];

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
    echo "<script>alert('Utilisateur modifié avec succès !')</script>";
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
    echo "<script>alert('Catégorie modifiée avec succès !')</script>";
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

    echo "<script>alert('Plat modifié avec succès !')</script>";
    // Rediriger vers la page d'administration
    header('Location: admin.php');
    exit();
}
?>
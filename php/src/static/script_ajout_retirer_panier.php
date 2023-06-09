<?session_start();
if (!isset($_SESSION['user'])){
    header("Location: connexion.php?error=error_connexion");
    exit;
} else {
}?>
<?php
$db = new SQLite3('sqlite.sqlite');
$user = $_SESSION['user'];
$id_user = $_SESSION['id_user'];

if (isset($_GET['id_plat'])){
    $id_plat = $_GET['id_plat'];
} elseif (isset($_POST['id_plat'])){
    $id_plat = $_POST['id_plat'];
}

if (isset($_GET['action'])){ // si l'action est dans l'URL
    $action = $_GET['action'];
} elseif (isset($_POST['action'])){ // si l'action est dans le formulaire  
    $action = $_POST['action'];
}

if ($action == "ajouter") {
    // Vérification de l'existence du plat dans le panier
    $sql = "SELECT * FROM panier WHERE ID_user='$id_user' AND ID_plat='$id_plat'";
    $result = $db->query($sql);
    if ($result->fetchArray()) {
        // Le plat est déjà dans le panier, mise à jour de la quantité
        $sql = "UPDATE panier SET QTE=QTE+1 WHERE ID_user='$id_user' AND ID_plat='$id_plat'";
        $db->query($sql);
        $_SESSION['is_add'] = true;
    } else {
        // Le plat n'est pas encore dans le panier, ajout avec quantité 1
        $sql = "INSERT INTO panier (ID_user, ID_plat, QTE) VALUES ('$id_user', '$id_plat', 1)";
        $db->query($sql);
        $_SESSION['is_add'] = true;
    }
} elseif ($action == "retirer") {
    // Vérification de l'existence du plat dans le panier
    $sql = "SELECT * FROM panier WHERE ID_user='$id_user' AND ID_plat='$id_plat'";
    $result = $db->query($sql);
    if ($row = $result->fetchArray()) {
        if ($row['QTE'] > 1) {
            // Le plat est dans le panier avec une quantité > 1, mise à jour de la quantité
            $sql = "UPDATE panier SET QTE=QTE-1 WHERE ID_user='$id_user' AND ID_plat='$id_plat'";
            $db->query($sql);
            $_SESSION['is_remove'] = true;
        } else {
            // Le plat est dans le panier avec une quantité = 1, suppression du panier
            $sql = "DELETE FROM panier WHERE ID_user='$id_user' AND ID_plat='$id_plat'";
            $db->query($sql);
            $_SESSION['is_remove'] = true;
        }
    }
} elseif ($action === "commander"){
    // insert la commande dans la table commande
    $id_user = $_SESSION['id_user'];
    $id_plat = $_POST['Id_plats'];
    $sql = "INSERT INTO commande (ID_user, ID_plat) VALUES ('$id_user', '$id_plat')";
    $db->query($sql);
    // supprime le panier de l'utilisateur
    $sql = "DELETE FROM panier WHERE ID_user='$id_user'";
    $db->query($sql);
}

// Redirection vers la page mainapage.php si il vient pas du panier sinon vers la page panier.php
if (isset($_GET['from_panier']) && $_GET['from_panier'] == 1) {
    header("Location: panier.php");
} else {
    header("Location: mainapage.php");
}
exit;
?>

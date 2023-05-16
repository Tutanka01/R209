<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'modifier') {
        $user_id = $_POST['value'];
        $new_login = $_POST['new_login'];
        $new_passwd = $_POST['new_passwd'];
        $new_perm = $_POST['new_perm'];

        // Effectuer la mise à jour de l'utilisateur dans la base de données
        $db = new SQLite3('sqlite.sqlite');
        $sql = "UPDATE user SET login = '$new_login', passwd = '$new_passwd', perm = '$new_perm' WHERE ID_user = '$user_id'";
        $db->query($sql);

        // Rediriger vers la page admin_liste.php après la modification
        header("Location: admin.php?modif=1");
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_GET['action'] === 'modif') {
        $user_id = $_GET['value'];

        $db = new SQLite3('sqlite.sqlite');
        $sql = "SELECT * FROM user WHERE ID_user = '$user_id'";
        $result = $db->query($sql);
        $row = $result->fetchArray();

        // Afficher le formulaire de modification avec les données de l'utilisateur
        echo '<form action="script_nouveau_admin.php" method="POST">';
        echo '<input type="hidden" name="action" value="modifier">';
        echo '<input type="hidden" name="value" value="'.$user_id.'">';
        echo 'Login: <input type="text" name="new_login" value="'.$row['login'].'"><br>';
        echo 'Mot de passe: <input type="text" name="new_passwd" value="'.$row['passwd'].'"><br>';
        echo 'Permission: <input type="text" name="new_perm" value="'.$row['perm'].'"><br>';
        echo '<button type="submit" name="submit" value="Modifier">Modifier</button>';
        echo '</form>';
    } elseif ($_GET['action'] === 'suppr') {
        $user_id = $_GET['value'];

        // Effectuer la suppression de l'utilisateur dans la base de données
        $db = new SQLite3('sqlite.sqlite');
        $sql = "DELETE FROM user WHERE ID_user = '$user_id'";
        $db->query($sql);

        // Rediriger vers la page admin_liste.php après la suppression
        header("Location: admin.php?suppr=1");
        exit();
    }
}
?>

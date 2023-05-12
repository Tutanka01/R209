<?php
session_start();
$db = new SQLite3('sqlite.sqlite');

if (isset($_POST['user']) && isset($_POST['mdp'])) {
    $user = $_POST['user'];
    $mdp = $_POST['mdp'];

    $sql = "SELECT * FROM user WHERE login = '$user' AND passwd = '$mdp'";
    $results = $db->query($sql);

    if ($results->fetchArray()) {
        $_SESSION['user'] = $user;
        $_SESSION['mdp'] = $mdp;
        $sql = "SELECT ID_user FROM user WHERE login = '$user'";
        $results = $db->query($sql);
        while ($row = $results->fetchArray()) {
            $_SESSION['id_user'] = $row['ID_user'];
        }
        if ($user == 'admin'){
            header("Location: admin.php");
        }
        header("Location: mainapage.php");
        exit();
    } else {
        $error = "Identifiant ou mot de passe invalide";
        header("Location: connexion.php?error=$error");
    }
}



?>

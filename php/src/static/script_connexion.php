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
        header("Location: mainapage.php");
        exit();
    } else {
        $error = "Identifiant ou mot de passe invalide";
        header("Location: connexion.php?error=$error");
    }
}
?>

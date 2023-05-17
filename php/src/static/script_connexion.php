<?php
//Démarrage de la session pour stocker les informations de connexion
session_start();
//Connexion à la base de données SQLite
$db = new SQLite3('sqlite.sqlite');

// Vérification de l'existence de l'utilisateur et du mot de passe envoyés par le formulaire de connexion POST
if (isset($_POST['user']) && isset($_POST['mdp'])) {
    $user = $_POST['user'];
    $mdp = $_POST['mdp'];

    // Requête SQL pour récupérer l'utilisateur et le mot de passe dans la base de données
    $sql = "SELECT * FROM user WHERE login = '$user' AND passwd = '$mdp'";
    $results = $db->query($sql);

    // Si la requête renvoie un résultat valide, l'utilisateur est connecté et la session est créée
    if ($results->fetchArray()) {
        $_SESSION['user'] = $user;
        $_SESSION['mdp'] = $mdp;

        // Requête SQL pour récupérer l'ID de l'utilisateur connecté dans la base de données
        $sql = "SELECT ID_user FROM user WHERE login = '$user'";
        $results = $db->query($sql);

        // Stockage de l'ID de l'utilisateur dans la session
        while ($row = $results->fetchArray()) {
            $_SESSION['id_user'] = $row['ID_user'];
        }

        // Si l'utilisateur est l'administrateur, il est redirigé vers la page admin.php, sinon vers la page mainpage.php
        if ($_SESSION['user'] == 'admin'){
            $_SESSION['admin'] = true;
            header("Location: admin.php");
            exit();
        } else {
            header("Location: mainapage.php");
            exit();
        }
    } else {
        // Si l'utilisateur n'est pas valide, une erreur est stockée et l'utilisateur est redirigé vers la page de connexion avec le message d'erreur
        $error = "Identifiant ou mot de passe invalide";
        header("Location: connexion.php?error=$error");
    }
}
?>
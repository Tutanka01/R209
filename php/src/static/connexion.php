<?
    session_start();
    if (isset($_GET['deconnexion'])){
        session_destroy(); // Détruit la session actuelle (vide $_SESSION)
        header("Location: mainapage.php");
    }

    if (isset($_SESSION['user'])){
        $error = "Vous êtes déjà connecté";
        echo $error;
    } else {
        if (isset($_GET['error'])){
            $error = $_GET['error'];
        } else {
        }
    }
    if(isset($_GET['error']) && $_GET['error'] == "error_connexion") {
        echo "<script>alert('Vous devez vous connecter pour acceder au panier');</script>";
    }elseif(isset($_GET['error']) && $_GET['error'] == "invalide"){
        echo "<script>alert('Login ou mot de passe invalide');</script>";
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_connexion.css">
    <title>Plat</title>
</head>
<body>  
    <div class="banner">
        <div class="titre">
            <a href="mainapage.php"><h1>Mascaroni.fr</h1></a>
        </div>
        <div class="panier">
            <form action="panier.php" method="POST">
                <button>Panier</button>
            </form>
        </div>
    </div>
    <div class="container">
        <h1>Connexion</h1>
        <form action="script_connexion.php" method="POST">
          <input type="text" name="user" placeholder="Login">
          <input type="password" name="mdp" placeholder="Mot de passe">
          <input type="submit" value="login">
        </form>
    </div>
    <div class="container_enregistrer">
        <h1>S'enregistrer</h1>
        <form action="script_modifier_admin.php" method="POST">
          <input type='text' id='login' name='login' placeholder="login" required>
          <input type='password' id='passwd' name='passwd' placeholder="mot de passe" required>
          <input type='hidden' id='action' name='action' value='ajouter_utilisateur'>
          <input type="submit" value="S'enregistrer">
        </form>
    </div>
</body>
</html>
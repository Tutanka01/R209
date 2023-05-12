<?
    session_start();
    if (isset($_SESSION['user'])){
        $error = "Vous êtes déjà connecté";
        header('Location: mainapage.php?error=$error');
    } else {
        if (isset($_GET['error'])){
            $error = $_GET['error'];
            echo $error;
        } else {
        }
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
            <h1>Mascaroni.fr</h1>
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
          <input type="text" name="mdp" placeholder="Mot de passe">
          <?

          ?>
          <input type="submit" value="login">
        </form>
    </div>
</body>
</html>
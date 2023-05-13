<?
    session_start();
    if (isset($_SESSION['user'])){
        echo $_SESSION['user'];
    } else {
    }
    // Si on ajoute un plat au panier on affiche cd message
    // La variabl is_add est utilisee/declaree dans le fichier panier.php
    if (isset($_SESSION['is_add'])) {
        $is_add = $_SESSION['is_add'];
        echo "<script>alert('Plat ajoute');</script>";
        unset($_SESSION['is_add']); 
    // Si on enleve un plat au panier on affiche ce message
    } elseif (isset($_SESSION['is_remove'])) {
        $is_add = $_SESSION['is_remove'];
        echo "<script>alert('Plat enleve');</script>";
        unset($_SESSION['is_remove']);
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles_mainpage.css">
    <title>Mainpage</title>
</head>
<body>  
    <div class="banner">
        <div class="titre">
            <h1>Mascaroni.fr</h1>
        </div>
        <div class="boutons">
            <div class="connexion">
                <form action="connexion.php" method="POST">
                    <button class="connexion-button">Connexion</button>
                </form>
            </div>
        </div>    
        <div class="panier">
            <form action="panier.php" method="POST">
                <button>Panier</button>
            </form>
        </div>
    </div>
    <div class="container">
        <h1>Quel plat voulez vous ?</h1>
        <form action="recherche_plat.php" method="POST">
          <input type="text" name="plat" placeholder="ex : 'Tajine' ">
          <input type="submit" value="Chercher">
        </form>
    </div>
    <div>
        <div class="lsite"> 
            <div class="container_lsite">
                <ul class="ulo">
                    <li class="lsite-item">
                        <form action="recherche_plat.php?type=chaud" method="POST">
                            <input type="hidden" name="plat" value="Caud">
                            <button type="submit">Chaud</button>
                        </form>
                    </li> 
                    <li class="lsite-item">
                        <form action="recherche_plat.php?type=Froid" method="POST">
                            <input type="hidden" name="plat" value="Froid">
                            <button type="submit">Froid</button>
                        </form>
                    </li>
                    <li class="lsite-item">
                        <form action="recherche_plat.php?type=Entree" method="POST">
                            <input type="hidden" name="plat" value="Entree">
                            <button type="submit">Entree</button>
                        </form>
                    </li>
                    <li class="lsite-item">
                        <form action="recherche_plat.php?type=Plat" method="POST">
                            <input type="hidden" name="plat" value="Plat">
                            <button type="submit">Plat</button>
                        </form>
                    </li>
                    <li class="lsite-item">
                        <form action="recherche_plat.php?type=Dessert" method="POST">
                            <input type="hidden" name="plat" value="Dessert">
                            <button type="submit">Dessert</button>
                        </form>
                    </li>
                    <li class="lsite-item">
                        <form action="recherche_plat.php?type=Accompagnement" method="POST">
                            <input type="hidden" name="plat" value="Accompagnement">
                            <button type="submit">Accompagnement</button>
                        </form>
                    </li>
                </ul>
            </div> 
        </div>
    </div>
</body>
</html>

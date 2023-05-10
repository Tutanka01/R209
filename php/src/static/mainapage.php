<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/styles/styles_mainpage.css">
    <title>Mainpage</title>
</head>
<body>  
    <div class="banner">
        <div class="titre">
            <h1>Mascaroni.fr</h1>
        </div>
        <div class="boutons">
            <div class="connexion">
                <form action="static/connexion.php" method="POST">
                    <button class="connexion-button">Connexion</button>
                </form>
            </div>
        </div>    
        <div class="panier">
            <form action="static/panier.php" method="POST">
                <button>Panier</button>
            </form>
        </div>
    </div>
    <div class="container">
        <h1>Quel plat voulez vous ?</h1>
        <form action="static/plat.php" method="POST">
          <input type="text" name="plat" placeholder="ex : 'Tajine' ">
          <input type="submit" value="Chercher">
        </form>
    </div>
    <div>
        <div class="lsite">
            
            <div class="container_lsite">
                <ul class="ulo">
                    <li class="lsite-item">
                        <form action="static/categorie.php?type=chaud" method="POST">
                            <input type="hidden" name="Caud" value="Caud">
                            <button type="submit">Chaud</button>
                        </form>
                    </li> 
                    <li class="lsite-item">
                        <form action="static/categorie.php?type=Froid" method="POST">
                            <input type="hidden" name="Froid">
                            <button type="submit">Froid</button>
                        </form>
                    </li>
                    <li class="lsite-item">
                        <form action="static/categorie.php?type=Entree" method="POST">
                            <input type="hidden" name="Entree">
                            <button type="submit">Entree</button>
                        </form>
                    </li>
                    <li class="lsite-item">
                        <form action="static/categorie.php?type=Plat" method="POST">
                            <input type="hidden" name="Plat">
                            <button type="submit">Plat</button>
                        </form>
                    </li>
                    <li class="lsite-item">
                        <form action="static/categorie.php?type=Dessert" method="POST">
                            <input type="hidden" name="Dessert">
                            <button type="submit">Dessert</button>
                        </form>
                    </li>
                    <li class="lsite-item">
                        <form action="static/categorie.php?type=Accompagnement" method="POST">
                            <input type="hidden" name="attribut" value="Accompagnement">
                            <button type="submit">Accompagnement</button>
                        </form>
                    </li>
                </ul>
            </div> 
        </div>
    </div>
</body>
</html>

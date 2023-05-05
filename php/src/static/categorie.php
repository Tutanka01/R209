<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/styles/styles_categorie.css">
    <title>Article</title>
</head>
<body>
    <?php

    echo $_GET["type"];

    ?>
    <div class="banner">
        <div class="titre">
            <h1>Mascaroni.fr</h1>
        </div>
        <div class="panier">
            <button>Panier</button>
        </div>
    </div>
    <div class="container">
        <h1>Tous les plats chauds</h1>
        <form action="http://localhost:5000/login" method="POST">
          <input type="text" name="plat" placeholder="ex : 'Tajine' ">
          <input type="submit" value="Chercher">
        </form>
    </div>
    <div class="les_plats">
        <div class="plat">
            <form action="plat.php?type=Plat1" method="POST">
                <button><img src="/static/images/tajine.jpg" alt="Plat1"></button>
                <p>lolozkekfo</p>
            </form>
        </div>
        <div class="plat">
            <form action="plat.php?type=Plat2" method="POST">
                <button><img src="/static/images/tajine.jpg" alt="Plat1"></button>
                <p>lolozkekfo</p>
            </form>
        </div>
        <div class="plat">
            <form action="plat.php?type=Plat3" method="POST">
                <button><img src="/static/images/couscous.jpg" alt="Plat1"></button>
                <p>lolozkekfo</p>
            </form>
        </div>
        <div class="plat">
            <form action="plat.php?type=Plat4" method="POST">
                <button><img src="/static/images/tajine.jpg" alt="Plat1"></button>
                <p>lolozkekfo</p>
            </form>
        </div>
        <div class="plat">
            <form action="plat.php?type=Plat5" method="POST">
                <button><img src="/static/images/tajine.jpg" alt="Plat1"></button>
                <p>lolozkekfo</p>
            </form>
        </div>
        <div class="plat">
            <form action="plat.php?type=Plat6" method="POST">
                <button><img src="/static/images/tajine.jpg" alt="Plat1"></button>
                <p>lolozkekfo</p>
            </form>
        </div>
    </div>
</body>
</html>
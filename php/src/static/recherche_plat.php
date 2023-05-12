<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/recherche_plat.css">
    <title>Article</title>
</head>
<body>
    <div class="banner">
        <div class="titre">
            <h1>Mascaroni.fr</h1>
        </div>
        <div class="panier">
            <button>Panier</button>
        </div>
    </div>
    <div class="container">
    <?php 
        // Je veux faire que, si la requette envoye est dans la liste des categories alors on affiche les plats de cette categorie
        // Sinon on afiche les plats qui correspondent a la requette
        $categories = ['Caud','Froid','Entree','Plat','Dessert','Accompagnement'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupère la valeur de l'input avec name="plat"
            $plat = $_POST['plat'];
            // Utilise la valeur comme bon te semble, par exemple :
            // if $plat is not in $categories
            if (!in_array($plat, $categories)) {
                echo "<h1>Les plats qui correspondent a : '$plat' </h1>";
                echo "<form action='recherche_plat.php' method='POST'>";
                    echo "<input type='text' name='plat' placeholder='ex : 'Tajine' >";
                    echo "<input type='submit' value='Chercher'>";
                echo "</form>";
            }
            else {
                echo "<h1>Les plats de la categorie : '$plat' </h1>";
                echo "<form action='recherche_plat.php' method='POST'>";
                    echo "<input type='text' name='plat' placeholder='ex : 'Tajine' >";
                    echo "<input type='submit' value='Chercher'>";
                echo "</form>";
            }
        }
    ?>      
    </div>
    
    <div class="les_plats">
    <?php
        $db = new SQLite3('sqlite.sqlite');
        if (!in_array($plat, $categories)) {
            $sql = 'SELECT DISTINCT * FROM plat WHERE nom_plat LIKE "'.$plat.'%"';
            $results = $db->query($sql);
            while ($donnees=$results->fetchArray())
                {
                echo "<div class='plat'>";
                    echo "<form action='plat.php' method='POST'>";
                        echo "<button type='submit' name='submit'><img src=".$donnees['Lien']." alt='".$donnees['ID_plat']."'></button>";
                        echo "<input type='hidden' name='id_plat' value='".$donnees['ID_plat']."'>";
                        echo "<p>".$donnees['nom_plat']."</p>";
                    echo "</form>";
                echo "</div>";
                }
            }
            else {
            $sql = "SELECT * FROM plat JOIN categorie ON plat.ID_plat = categorie.ID_plat WHERE categorie.$plat = 1";
            $results = $db->query($sql);
            while ($donnees=$results->fetchArray())
                {
                echo "<div class='plat'>";
                    echo "<form action='plat.php' method='POST'>";
                        echo "<button type='submit' name='submit'><img src=".$donnees['Lien']." alt='".$donnees['ID_plat']."'></button>";
                        echo "<input type='hidden' name='id_plat' value='".$donnees['ID_plat']."'>";
                        echo "<p>".$donnees['nom_plat']."</p>";
                    echo "</form>";
                echo "</div>";
                }
        }
    ?>
    </div>
</body>
</html>
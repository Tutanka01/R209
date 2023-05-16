<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_admin.css">
    <title>Admin</title>
</head>
<body>
<div class="banner">
        <div class="titre">
            <a href="mainapage.php"><h1>Mascaroni.fr</h1></a>
        </div>
        <div class="boutons">
            <div class="connexion">
                <form action="connexion.php" method="POST">
                    <button class="connexion-button">Connexion</button>
                </form>
            </div>
        </div>    
</div>
<?
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $donnee = $_POST['type'];
}
echo '<form action="admin_new.php" method="POST">';
    echo '<input type="hidden" name="new" value="'.$donnee.'">';
    echo "<button type='submit'>Ajouter un nouveau</button>";
echo "</form>";

    $db = new SQLite3('sqlite.sqlite');
    $sql= 'SELECT DISTINCT * FROM '.$donnee; 
    $results = $db->query($sql);
    while ($row=$results->fetchArray()) {
        echo '<div class="button">';
        echo $row[0];
        foreach (range(1, (count($row)/2)-1) as $elt) {
            echo ' | ';
            echo $row[$elt];
            }
            echo '<form action="script_nouveau_admin.php" method="GET">';
                echo '<input type="hidden" name="action" value="modif">';
                echo '<input type="hidden" name="value" value="'.$row[0].'">';
                echo '<button type="submit" name="modif" value="'.$row[0].'">Modifier</button>';
            echo '</form>';

            echo '<form action="script_nouveau_admin.php" method="GET">';
                echo '<input type="hidden" name="action" value="suppr">';
                echo '<input type="hidden" name="value" value="'.$row[0].'">';
                echo '<button type="submit" name="suppr" value="'.$row[0].'">Supprimer</button>';
            echo '</form>';


            echo '</div>';
    }
?>
</body>
</html>
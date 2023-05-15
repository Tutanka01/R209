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
            <h1>Mascaroni.fr</h1>
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
    $donnee = $_POST['new'];
}

$db = new SQLite3('sqlite.sqlite');
$sql= 'PRAGMA table_info('.$donnee.')'; 
$results = $db->query($sql);
echo '<form action="nouveau.php" method="POST">';
while ($row=$results->fetchArray()) {
    echo '<div class="button">'.$row[1];
    echo '<input type="text" name="plat">';
    echo '</div></br>';
}
echo '<button type="submit">Envoyer</button>';
?>




</body>
</html>
<?php
// Exemple de comment utiliser une database en php, ça ma pris 2h pour trouver comment faire :)
$db = new SQLite3('/var/www/html/sqlite.sqlite', SQLITE3_OPEN_READWRITE); // Il faut imperativement que le fichier soit en .sqlite

// Get a count of the number of users
#$compo = $db->querySingle('SELECT * FROM composant');
#echo($compo);
// Close the connection
$db->close();


include ("/var/www/html/static/plat.html");

if (isset($_POST['plat'])) {
    $plat = $_POST['plat'];
    include ("/var/www/html/static/plat.html");
}
echo("Peut etre ça marche qui sait ??")
?>
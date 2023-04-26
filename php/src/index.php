<?php
$db = new SQLite3('/var/www/html/test.sqlite', SQLITE3_OPEN_READWRITE); // Il faut imperativement que le fichier soit en .sqlite

// Get a count of the number of users
$compo = $db->querySingle('SELECT * FROM machine');
echo($compo);

// Close the connection
$db->close();
?>

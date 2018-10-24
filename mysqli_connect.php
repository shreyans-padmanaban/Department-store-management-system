<?php
// Opens a connection to the database
// Since it is a php file it won't open in a browser
// It should be saved outside of the main web documents folder
// and imported when needed


//Command that gives the database user the least amount of power
//as is needed.
GRANT INSERT, SELECT, DELETE, UPDATE ON neure.*
TO 'studentweb'@'localhost'
IDENTIFIED BY '';
//SELECT : Select rows in tables
//INSERT : Insert new rows into tables
//UPDATE : Change data in rows
//DELETE : Delete existing rows (Remove privilege if not required)
DEFINE ('DB_USER', 'studentweb');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'neure');
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>

<?php
echo "Default page served by Nginx";
echo "<br>Revutski Dzmitry";

$host = 'mysql'; 
$username = 'user'; 
$password = 'password'; 
$dbname = 'test_db';

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

echo "<br>Connected successfully to MySQL database using mysqli.";

$mysqli->close();
?>

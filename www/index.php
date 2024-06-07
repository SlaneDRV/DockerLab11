<?php
$host = 'mysql';
$username = 'user';
$secret_path = '/run/secrets/mysql_root_password';
$password = file_get_contents($secret_path);
$dbname = 'test_db';

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Connected successfully to MySQL using mysqli with secrets.";
?>

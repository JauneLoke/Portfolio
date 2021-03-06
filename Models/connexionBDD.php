<?php

$host = 'localhost';
$db = 'dbName';
$user = 'dbUsername';
$pass = 'dbPass';
$charset = 'utf8mb4';

$dbh = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
	$dbh = new PDO($dbh, $user, $pass, $options);
} catch (PDOException $e) {
	echo 'Connexion échouée : ' . $e->getMessage();
}

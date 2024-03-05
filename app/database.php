<?php

$server = 'mysql:3306';
$username = 'root';
$password = 'abc123.';
$database = 'login';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>

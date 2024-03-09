<?php

session_start();

if (isset($_SESSION['name'])) {
  header('location: ./home.php');
  exit;
}

if (!isset($_POST['submit'])) {
  header('location: ./index.php');
  exit;
}

$conn = mysqli_connect('mysql:3306', 'root', 'abc123.', 'login_php');
if (!$conn) {
    die("Error on the conection with the database: " . mysqli_connect_error());
}
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $query);
if (!$result) {
    die("Error into the query: " . mysqli_error($conn));
}
$users_num = mysqli_num_rows($result);

if ($users_num < 1) {
    $_SESSION['login_failed'] = true;
    header('location: ./index.php');
    exit;
}

$user = mysqli_fetch_assoc($result);
$_SESSION['name'] = $user['name'];

header('location: ./home.php');
exit;

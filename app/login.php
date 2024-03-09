<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
}
require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT id, email, password FROM users WHERE email = '$email' AND password = '$password'";
    $results = $conn->query($sql);

    $message = '';

    if ($results->rowCount() > 0) {
        $_SESSION['user_id'] = $results->fetchColumn();
        header("Location: /php-login");
    } else {
        $message = 'Sorry, those credentials do not match';
    }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>
    <span>or <a href="signup.php">SignUp</a></span>

    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Enter your email">
      <input name="password" type="password" placeholder="Enter your Password">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>

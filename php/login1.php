<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
require('db.php');
session_start();
// When form submitted, check and create user session.
if (isset($_POST['username'])) {
    $username = $_POST['username'];    // removes backslashes
    $password = $_POST['password'];

    // Check user is exist in the database
    $query    = "SELECT * FROM `property` WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$sqli_query);
    $rows = mysqli_num_rows($result);
    if ((password_verify($password,$row['password']))){
        echo'<script> alert("Incorrect Username /Password");</script>';
    } else {
        echo'<script> alert("Login Successfully");</script>';
        header("Location:./frontpage.php");
    }
} else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration1.php">New Registration</a></p>
    </form>
<?php
}
?>
</body>
</html>

<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

    if(mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if ($password == $row['password']) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = $row['id'];
        }
        if ($row['id'] == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/1.css">
    <title>Document</title>
</head>
<body>
    <h1>Welcome To Admin</h1>
    <h3>LOGIN</h3>
    <form action="" method="post">
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">Username atau Password salah</p>
    <?php endif; ?>

    <div class="log">
    <table class="table">
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
    </table>
    <div class="remember">
            <input type="checkbox" name="remember">
            <label for="remember">Remember me</label>
    </div>
    
    <button type="submit" name="submit">Login</button>
    
    </div>
    </form>
</body>
</html>
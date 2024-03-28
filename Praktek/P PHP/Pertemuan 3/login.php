<?php
session_start();
?>

<form action="" method="POST">
    <div>
        <label for="">Username :</label>
        <input type="text" name="username" placeholder="Masukkan Nama Anda">
    </div>
    <br>
    <div>
        <label for="">Password :</label>
        <input type="password" name="password" placeholder="Masukkan Password Anda">
    </div>
    <input type="submit" name="masuk" value="Login">
</form>

<?php

if (isset($_POST['masuk'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "admin123") {
        $_SESSION['user'] = $username;
        header('location: home.php');
    } else {
        echo "<script>alert('Username/Password Salah!!')</script>";
    }
}
?>
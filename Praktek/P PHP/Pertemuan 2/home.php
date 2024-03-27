<?php
session_start();
// echo "<script>alert('Login Berhasil!!')</script>";
if (!$_SESSION['user']) {
    header('location: latihan2.php');
}
?>

<h1>Selamat Datang <?= $_SESSION['user'] ?>di NF Academy</h1>
<br>

<form method="POST" action="">
    <input type="submit" name="logout" value="Logout">
</form>

<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header('location: latihan2.php');
}
?>
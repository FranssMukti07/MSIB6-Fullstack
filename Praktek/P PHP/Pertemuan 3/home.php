<?php
session_start();

?>

<h1>Hi, <?= $_SESSION['user']; ?></h1>
<h3>Selamat Datang di Web NF Academy</h3>
<form action="" method="POST">
    <input type="submit" value="Logout" name="logout">
</form>

<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header('location: login.php');
}
?>
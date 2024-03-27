<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <h1>Form Login</h1>
    <form action="" method="POST">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Masukkan Username Anda">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Masukkan Password Anda">
        </div>
        <input type="submit" value="Login" name="login" class="btn btn-outline-primary">
    </form>
    <?php
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == 'admin' && $password == 'rahasia') {
            $_SESSION['user'] = $username;
            header('location: home.php');
        } else {
            echo "<script>alert('Username/Password Salah, Coba Lagi!!')</script>";
        }

    }
    ?>
</body>

</html>
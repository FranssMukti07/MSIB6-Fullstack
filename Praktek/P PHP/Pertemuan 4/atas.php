<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Webku</h1>

    <div>
        <?php
        foreach ($menu_atas as $key => $value) {
            echo "<a href='index.php?hal=$key'>$key</a>";
        }
        ?>
    </div>
</body>
</html>
<div>
    <!-- Halaman Depan -->
    <?php
    error_reporting(0);
    //index.php?hal=produk
    $hal = $_GET['hal'];
    if (!empty($hal)) {
        include_once $menu_bawah[$hal];
    } else {
        include_once "home.php";
    }
    ?>
</div>
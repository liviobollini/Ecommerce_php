<?php
include('config.php');
$dbConn = $dbInstance->connect($db);
include('header.php');
include('includes/topMenu.php');
?>
<?php
include('includes/bannerPagine.php');
?>
<div class="top-brands">
    <div class="container">
        <h3>Prodotti Offerta</h3>
        <div class="agile_top_brands_grids" id="offerte">
            <?php
$newProdotti->mostra_prodotti_sconto($dbConn);
?>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>
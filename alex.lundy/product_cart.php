<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : null;

if ($id === null) {
    header("Location: admin/index.php");
    exit;
}

$cartItems = getCartItems();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="UTF-8">
    <title>Cart page</title>
    <?php include "parts/meta.php"; ?>
</head>
<body>
<?php include "parts/navbar.php"; ?>

<div class="container">
   <h2>In Your Cart</h2>
   <div class="grid gap">
    <div class="col-xs-12 col-md-7">
        <div class="card soft">
            <?php
            echo array_reduce($cartItems, function($r, $o) {
                return $r . "<div>$o->name</div>";
            }, '');
            ?>
        </div>
    </div>
    <div class="col-xs-12 col-md-5">
        <?= cartTotals() ?>
    </div>
   </div>
</div>

</body>
</html>

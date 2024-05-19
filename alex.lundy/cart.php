<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    
    $query = "SELECT * FROM `products` WHERE `id` = ?";
    
    $product = makeQuery(makeConn(), $query, "i", [$id])[0];
}

$cart_items = getCartItems();

$items_with_details = array_map(function($item) {
    $query = "SELECT `name`, `price` FROM `products` WHERE `id` = ?";
    $product_details = makeQuery(makeConn(), $query, "i", [$item->id])[0];
    $item->name = $product_details->name;
    $item->price = $product_details->price;
    return $item;
}, $cart_items);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
                <?= array_reduce($items_with_details, function($r, $o) {
                    return $r . "<div>{$o->name} - {$o->amount} - \${$o->price}</div>";
                }) ?>

                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <?= cartTotals() ?>
            </div>
        </div>
    </div>
</body>
</html>

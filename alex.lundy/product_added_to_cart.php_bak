<?php
include_once "lib/php/functions.php";

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $product_id = intval($_GET['id']);
    $product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`='$product_id'");

    if (!empty($product)) {
        $product = $product[0];
    } else {
        exit("Product not found");
    }
} else {
    exit("Product ID is not specified or invalid");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="UTF-8">
    <title>Confirmation Page</title>
    <?php include "parts/meta.php"; ?>
</head>

<body>
    <?php include "parts/navbar.php"; ?>
    <div class="container">
        <div class="card soft">
            <?php if (!empty($product)): ?>
            <h2>You added <?= isset($product->name) ? $product->name : 'Unknown Product' ?> to your cart</h2>
            <?php else: ?>
            <p>Product not found</p>
            <?php endif; ?>
            <div class="display-flex">
                <div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
                <div class="flex-stretch"></div>
                <div class="flex-none"><a href="product_cart.php">Go to Cart</a></div>
            </div>
        </div>
    </div>
</body>
</html>

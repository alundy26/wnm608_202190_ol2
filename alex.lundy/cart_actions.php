<?php
include_once "lib/php/functions.php";


function addToCart($p) {
    $_SESSION['cart'][] = $p['product-id'];
}


print_p([$_GET, $_POST]);

switch($_GET['action']) {
    case "add-to-cart":
        $product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=" . $_POST['product-id'])[0];
        addToCart($_POST);
        header("location:product_added_to_cart.php?id={$_POST['product-id']}");
        break;
    case "update-cart-item":
        // Update cart item logic
        break;
    case "delete-cart-item":
        // Delete cart item logic
        break;
    case "reset-cart":
        resetCart();
        break;
    default:
        die("Incorrect Action");
}
print_p([$_GET,$_POST,$_SESSION]);
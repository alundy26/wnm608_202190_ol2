<?php
include_once "lib/php/functions.php";

function addToCart($p){
    $_SESSION['cart'][] = $p;
}

print_p([$_GET, $_POST]);

switch($_GET['action']){
    case "add-to-cart":
        $query = "SELECT * FROM `products` WHERE `id`=?";
        $product = makeQuery(makeConn(), $query, "i", [$_POST['product-id']]);
        addToCart($product);
        header("location: product_added_to_cart.php?id={$_POST['product-id']}");
        break;
    case "update-cart-item":
        break;
    case "delete-cart-item":
        break;
    case "reset-cart":
        resetCart();
        break;
    default:
        die("Incorrect Action");
}

print_p([$_GET, $_POST, $_SESSION]);

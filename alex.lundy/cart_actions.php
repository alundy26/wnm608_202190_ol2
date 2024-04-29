<?php
include_once "lib/php/functions.php";

function array_find($array, $fn) {
    foreach($array as $o) if($fn($o)) return $o;
    return false;
}
function getCart(){
    return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}
function addToCart($id, $amount){
    $cart = getCart();

$p = array_find($cart, function($o) use($id) { return $o->id==$id; });

if($p){
    $p->amount += $amount;
}else{
    $_SESSION['cart'][] = (object)[
        "id"=>$id,
        "amount"=>$amount,
        //"color"=>$color
    ];
    }
}

function resetCart(){ $_SESSION['cart'] = [];}

switch($_GET['action']){
    case "add-to-cart":
        $product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_POST['product-id'])[0];
        addToCart($_POST['product-id'],$_POST['product-amount']);
       //header("location:product_added_to_cart.php?id={$_POST['product-id']}");
        break;
  
    case "update-cart-item":
        //header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
        break;
    case "delete-cart-item":
      //  header("location:{$_SERVER['PHP_SELF']}");
        break;
    case "reset-cart":
        resetCart();
    default:
        die("Incorrect Action");
}
print_p([$_GET,$_POST,$_SESSION]);

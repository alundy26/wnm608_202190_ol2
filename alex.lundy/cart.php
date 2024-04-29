<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];


print_p(getCartItems());


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="UTF-8">
    <title>Cart page </title>

    <?php include "parts/meta.php"; ?>
</head>

<body>
<?php include "parts/navbar.php"; ?>

<div class="container">
   <h2>In Your Cart</h2>
   <div class="grid gap">
    <div class="col-xs-12 col-md-7">
        <div class="card soft">
            <?=array_reduc($cart, function($r,$o){return $r. "<div>$o->title</div>";}) ?>
</div>
<div class="col-xs-12 col-md-5">
    <?= cartTotals() ?>
    
</div>
</div>
</div>
</div>
</div>
</body>
</html>
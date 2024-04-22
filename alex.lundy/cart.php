<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";
$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

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
    <div class="card soft flat">
        <div class="flex-stretch"><strong>Sub Total</strong></div>
        <div class="flex-none">&dollar; 3.50</div>
</div>
<div class="card soft flat">
        <div class="flex-stretch"><strong>Taxesl</strong></div>
        <div class="flex-none">&dollar; 3.50</div>
</div>
<div class="card soft flat">
        <div class="flex-stretch"><strong>Total</strong></div>
        <div class="flex-none">&dollar; 7.o0</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
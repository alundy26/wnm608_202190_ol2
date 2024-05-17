<?php

function productListTemplate($r, $o){
    return $r.<<<HTML
    <a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
        <figure class= "figure product display-flex flex-column">
        <img src="$o->thumbnail" alt="">
         
            <figcaption class="flex-none">
                  <div>&dollar;$o->price</div>
                  <div>$o->name</div>   
            </figcaption>
</figure>
</a>
HTML;
}


function cartListTemplate($r,$o){
    $totalfixed = number_format($0->total, 2, '.', '');
    return $r.<<<HTML
    <div class="diplay-flex card-section">
    <div class="flex-none images-thumbs">
    <img src="/images/store/$o->thumbnail">
    </div>
    <div class="flex-stretch">
    <strong>$0->title($o->amount)</strong>
    <div>Delete</div>
</div>
<div class="flex-none">
&dollar; $totalfixed
</div>
HTML;
}

function cartTotals(){
    $cart =getCartItems();
    $cartprice = array_reduce($cart, function($r, $o){return $r + $o->total;},0);


    $pricefixed = number_format($cartprice, 2, '.', '');
    $taxfixed = number_format($cartprice*0.0725, 2, '.', '');
    $taxedfixed = number_format($cartprice*1.0725, 2, '.', '');

    return<<<HTML
<div class="card soft flat">
<div class="flex-stretch"><strong>Sub Total</strong></div>
<div class="flex-none">&dollar; $cartprice</div>
</div>
<div class="card soft flat">
<div class="flex-stretch"><strong>Taxesl</strong></div>
<div class="flex-none">&dollar; 3.50</div>
</div>
<div class="card soft flat">
<div class="flex-stretch"><strong>Total</strong></div>
<div class="flex-none">&dollar; 7.o0</div>

HTML;
}
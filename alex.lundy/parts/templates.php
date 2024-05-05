<?php

function productListTemplate($r, $o){
    return $r.<<<HTML
    <a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
        <figure class= "figure product display-flex flex-column">
        <img src="https://via.placeholder.com/400x400?text=product" alt="">
            <div class="flex-stretch">
            <img src="o->thumbnail" alt="">
            </div>
            <figcaption class="flex-none">
             <div>&dollar;$o->price</div>
                <div>$o->name</div>
                
            </figcaption>
</figure>
</a>
HTML;
}
?>
<?php

function productListTemplate($r, $o){
    return $r.<<<HTML
    <a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
        <figure class= "figure product display-flex flex-column">
        <img src='img/store/$o->images' alt="">
            <div class="flex-stretch">
          
            </div>
            <figcaption class="flex-none">
             <div>&dollar;$o->price</div>
                <div>$o->name</div>
                
            </figcaption>
</figure>
</a>
HTML;
}




function recommendedProducts($a) {
    $products=array_reduce($a,'productListTemplate');
    echo <<<HTML
    <div class="grid gap productlist">$products</div>
    HTML;
    }

    function recommendedCategory($cat, $limit=3){
        $result = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `category`='$cat' ORDER BY `date_create` DESC LIMIT $limit");
        recommendedProducts($result);
    }

    function recommendedSimilar($cat, $id=0, $limit=3){
        $result = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `category`='$cat' AND `id` <>$id ORDER BY rand() DESC LIMIT $limit");
        recommendedProducts($result);
    }
    

?>
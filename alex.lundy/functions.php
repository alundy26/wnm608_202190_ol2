<?php

function print_p($v){
    echo "<pre>", print_r($v), "</pre>";
}

function file_get_json($filename){
    $file = file_get_contents($filename);
    return json_decode($file);
}
?>
<?php

function cartItemByID($id) {
    return array_find(getCart(), function($o)use($id){return $o->id==$id;});
}

function makeCartBadge(){
    $cart= getCart();
    if(count($cart)==0){
        return "";
    }else{
        return array_reduce($cart, function($r, $o){return $r+$o->amount;}, 0);
    }
}

function getCart(){
    $cart = getCartItem();

    if(empty($cart)) return [];

    $ids = implode(",",array_map(function($o){return $o->id;}, cart));
    $data = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN ($ids)");


    return array_map(function($o) use ($cart){

        $p= cartItemById($o->id);
        $o->amount = $p->amount;
        $o->total = $p->amount * $o->price;
        return $o;

    },$data);
}
?>
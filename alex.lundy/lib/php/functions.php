<?php

session_start();

function print_p($v){
    echo "<pre>", print_r($v, true), "</pre>";
}

function file_get_json($filename){
    $file = file_get_contents($filename);
    return json_decode($file);
}

include_once "auth.php";

function makeConn(){
    $conn = new mysqli(...MYSQLIAuth());
    if($conn->connect_errno) die($conn->connect_error);
    $conn->set_charset('utf8');
    return $conn;
}

function makePDOConn(){
    try {
        $conn = new PDO(...PDOAuth());
    } catch(PDOException $e){
        die($e->getMessage());
    }
    return $conn;
}

function array_find($array, $fn) {
    foreach($array as $o) if($fn($o)) return $o;
    return null; 
}

function getCartItems() {
    return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}

function addToCart($id, $name, $amount, $price) {
    $cart = getCartItems();

    $p = array_find($cart, function($o) use($id) { return $o->id == $id; });

    if($p) {
        $p->amount += $amount;
    } else {
        $_SESSION['cart'][] = (object)[
            "id" => $id,
            "name" => $name,
            "amount" => $amount,
            "price" => $price,
        ];
    }
}

function resetCart() {
    $_SESSION['cart'] = [];
}

function cartItemById($id) {
    return array_find(getCartItems(), function($o) use ($id) { return $o->id == $id; });
}



function makeQuery($conn, $qry, $types = null, $params = null){
    $stmt = $conn->prepare($qry);

    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    if (!empty($params) && !empty($types)) {
        $stmt->bind_param($types, ...$params);
    }

    $stmt->execute();

    if ($stmt->errno) {
        die("Error executing statement: " . $stmt->error);
    }

    $result = $stmt->get_result();

    $data = [];
    while ($row = $result->fetch_object()) {
        $data[] = $row;
    }

    $stmt->close();

    return $data;
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

function makeCartBadge(){
    $cart= getCartItems();
    if(count($cart)==0){
        return "";
    }else{
        return array_reduce($cart, function($r, $o){return $r+$o->amount;}, 0);
    }
}

?>

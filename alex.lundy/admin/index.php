$empty_product = (object)[
    "title"=>"",
    "description"=>"",
    "price"=>"",
    "category"=>"",
    "thumbnail"=>"",
    "images"=>"",
    "quantity"=>""
    ]; 
    



//templates 
function productListItem($r,$o){
    return $r. <<<HTML
    <div>A href="{$_SERVER['PHP_SELF']}?id=$o->title</a></div>
    HTML; 
}

function showProductPage($r, $o){
    $id = $_GET['id'];
    $addoredit = $id == "new" ? "Add" : "Edit";
    $createorupdate = $id =="new"? "create" : "update";
    $images = implode(",", $user->images);


    //heredoc
$display = <<<HTML
<div>
    <h2>$user->name</h2>
<div>
    <strong>Type</strong>
    <span>$o->type</span>
</div>
<div>
    <strong>Email</strong>
    <span>$user->type</span>
</div>
<div>
    <strong>images</strong>
    <span>$user->type</span>
</div>

$form = <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
    <h2>$addoredit User</h2>
    <label class="form-control">

















//this is where video 1 code goes 

<div class="container">

<?php
if(isset($_GET['id'])){
showProductPage();
    $_GET['id']=="new" ?
        $empty_product : 
        makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
);
//showPRoductPage()
}else{

    <h2>Product List</h2>

    <?php

    $result= makeQuery(makeConn(),"SELECT * FROM `products`");


echo array_reduce($result, 'productListItem');

}
   



    ?>
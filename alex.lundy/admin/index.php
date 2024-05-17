<<<<<<< HEAD
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
=======

    <link rel="stylesheet" href="../lib/css/styleguide.css">
    <link rel="stylesheet" href="../lib/css/gridsystem.css">
    <link rel="stylesheet" href="../css/storetheme.css">
<?php 
include "../lib/php/functions.php";

$empty_product = (object)[
    "name"=>"Pencils",
    "description"=>"Pack of 40 classroom pencils with erasers.",
    "price"=>"13.99",
    "category"=>"Drawing",
    "thumbnail"=>"color_pencil_thumb.jpg",
    "images"=>"color_pencils.jpg"
];



//Logic
try {
    $conn = makePDOConn();
    if(isset($_GET['action'])) {
        switch($_GET['action']) {
            case "update":
                $statement = $conn->prepare("UPDATE
                `products`
                SET
                    `name`=?,
                    `category`=?,
                    `price`=?,
                    `description`=?,
                    `thumbnail`=?,
                    `images`=?,
                    `date_modify`=NOW()
                WHERE `id`=?
                ");
                $statement->execute([
                    $_POST['user-name'],   
                    $_POST['user-category'],
                    $_POST['user-price'],
                    $_POST['user-description'],
                    $_POST['user-thumbnail'],
                    $_POST['user-images'],
                    $_GET['id']    
                ]);
                header("location: {$_SERVER['PHP_SELF']}?id={$_GET['id']}");
                break;
            case "create":
                $statement = $conn->prepare("INSERT INTO
                `products`
               (
                    `name`,
                    `category`,
                    `price`,
                    `description`,
                    `thumbnail`,
                    `images`,
                    `date_create`,
                    `date_modify`
                )
                VALUES (?,?,?,?,?,?,NOW(),NOW())
                ");
                $statement->execute([
                    $_POST['user-name'],   
                    $_POST['user-category'],
                    $_POST['user-price'],
                    $_POST['user-description'],
                    $_POST['user-thumbnail'],
                    $_POST['user-images'],
                ]);
                $id=$conn->lastInsertId();
                header("location: {$_SERVER['PHP_SELF']}?id=$id");
                break;
            case "delete":
                $statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
                $statement->execute([$_GET['id']]);
                header("location: {$_SERVER['PHP_SELF']}");
                break;
        }
    }
}catch(PDOException $e){
    die($e->getMessage());
}


















// Templates
function productListItem($r, $o){
    return $r . <<<HTML
    <div class="card soft">
        <div class="display-flex align-center">
            <div class="flex-none"><img src='/img/thumb/$o->thumbnail'></div>
            <div class="flex-stretch">$o->name</div>  
            <div class="flex-none"><div><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div></div> 
        </div>
    </div>
    HTML;
}



function showProductPage($o){
    $id = $_GET['id'];
    $add_or_edit = $id == "new" ? "Add" : "Edit";
    $create_or_update = $id == "new" ? "create" : "update";
    $images = implode(", ", explode(",", $o->images));
    $thumbnail = implode(", ", explode(",", $o->thumbnail));

    //heredoc
    $display=<<<HTML
         <div>
            <h2>$o->name</h2>
            <div class="form-control">
                <Strong>Price:</strong>
                <span>&dollar;$o->price</span>
            </div>
            <div class="form-control">
                <Strong>Category:</strong>
                <span>$o->category</span>
            </div>
            <div class="form-control">
                <Strong>Description:</strong>
                <span>$o->description</span>
            </div>
            <div class="form-control">
                <Strong>images:</strong>
                <span class=""><img src='img/store/$o->images'></span>
            </div>
        
            <div class="form-control">
                <Strong>Thumbnail:</strong>
                <span class=""><img src='img/thumb/$o->thumbnail'></span>
            </div>

        
        HTML;

    $form = <<<HTML
        <div>
            <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$create_or_update">
                <h2>$add_or_edit Product</h2>
                <div class="form-control">
                    <label class="form-label" for="user-name">Name</label>
                    <input class="form-input" name="user-name" id="o-name" type="text" value="$o->name" placeholder="Enter the Product Name">
                </div>
                <div class="form-control">
                    <label class="form-label" for="user-category">Category</label>
                    <input class="form-input" name="user-category" id="user-category" type="text" value="$o->category" placeholder="Enter the Product category">
                </div>
                <div class="form-control">
                    <label class="form-label" for="user-description">Description</label>
                    <textarea class="form-input" name="user-description" id="user-description" placeholder="Enter the Product Description">$o->description</textarea>

                </div>

                <div class="form-control">
                    <label class="form-label" for="user-price">Price</label>
                    <input class="form-input" name="user-price" id="user-price" type="number" min="0" max="9999" step="0.01" value="$o->price" placeholder="Enter the product price">
                </div>
                <div class="form-control">
                    <label class="form-label" for="user-images">Images</label>
                    <input class="form-input" name="user-images" id="user-images" type="text" value="$images" placeholder="Enter the product images, comma separated">
                </div>
                <div class="form-control">
                    <label class="form-label" for="user-thumbnail">Thumbnail</label>
                    <input class="form-input" name="user-thumbnail" id="user-thumbnail" type="text" value="$thumbnail" placeholder="Enter the product thumbnail, comma separated">
                </div>
                <div class="form-control">
                    <input class="form-button" type="submit" value="Save Changes">
                </div>
            </form>
        </div>
    HTML;
    $output = $id == "new" ? "<div class='card soft'>$form</div>" :
        "<div class='grid gap'>
            <div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
            <div class='col-xs-12 col-md-5'><div class='card soft'>$form</div></div>
        </div>";

    $delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

    echo <<<HTML
    <div  class="card soft">
        <nav class="display-flex">
            <div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
            <div class="flex-none">$delete</div>
        </nav>
    </div>
    $output
    HTML;
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Admin Page</title>
    <?php include "../parts/meta.php"; ?>
</head>
<body>
    <header class="navbar">
        <div class="container display-flex">
            <div class="flex-none">
                <h1>Product Admin</h1>
            </div>
            <div class="flex-stretch"></div>
            <nav class="nav nav-flex flex-none">
                <ul>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <?php
        if(isset($_GET['id'])){
            $product = $_GET['id'] == "new" ? $empty_product : makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=" . intval($_GET['id']))[0];
             showProductPage($product);
        } else {

        ?>
        <h2>Product List</h2>
            <?php
            
            $products = makeQuery(makeConn(), "SELECT * FROM `products` ORDER BY `date_create`");
            
            echo array_reduce($products, 'productListItem', '');
    
            ?>
        </div>
    
    <?php } ?>
        
    </div>
</body>

>>>>>>> bf5855649918f2ffc0fe3100d2d122f9857fdb2c

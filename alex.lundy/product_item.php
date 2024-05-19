<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;


if ($id <= 0) {
    
    exit("Invalid product ID");
}


$query = "SELECT * FROM `products` WHERE `id` = ?";


$conn = makeConn();


$products = makeQuery($conn, $query, "i", [$id]);


if (!empty($products)) {
    
    $product = $products[0];
} else {
    
    exit("Product not found");
}


?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <meta name ="viewport" content="width=device-width">
    
    
    <link rel="stylesheet" href="../lib/css/styleguide.css">
    <link rel="stylesheet" href="../lib/css/gridsystem.css">
    <link rel="stylesheet" href="../css/storetheme.css">
</head>
<body>

<?php include "parts/navbar.php"; ?>

        <style type="text/css">


        .img_left
        {
            float: left;
            border-radius: 10px;
            margin-right: 50px;
        }
        
        .faq{
            max-width: 700px;
            margin-top: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid black
            cursor: pointer; 
        }
      
        .question{
            display:flex;
            justify-content: space-between;
            align-items:center;
        }
        .question h3{
            font-size: 1.8rem;
        }

        .answer p

      
            </style>
</header>

<div class="container">
<div class="form-control">
    <form class="hotdog dark">
        <input type="search" placeholder="Search">
    </form>




    <div class="card soft">
    <nav class="nav nav-crumbs">
        <ul>
            <li><a href="http://alexlundydesigns.com:8000/index.php">Home</a></li>
            <li><a href="http://alexlundydesigns.com:8000/product_list.php">Shop</a></li>
           
        </ul>
    </nav>
    <br>
    
    <br>
    <div class="card-section">
        <img class= "img_left" img src="/img/store/<?= $product->images ?>" alt="">
        <h2><?= $product->name ?></h2>
       <p><?= $product->price ?></p>
       <h3> Description </h3>
       <p>
           <?= $product->description ?></p>
   

    <div class="col-xs-12 col-md-5">
    <form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">

    <input type="hidden" name="product-id" value="<?= $product->id ?>">


        <div class="card-section">
        <label for="product-amount" class="form-label">Amount</label>
        <div class="form-select" >
        <select id="product-amount" name="product-amount">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
    </select>
    

    <div class="card-section">
		<input type="submit" class="form-button" value="Add to Card">
	</div>
</div>
</div>

   
   
            <h3>Description </h3>

            <svg width="15" height="10" viewBox="0 0 42 24">
            </svg>
            <div class="answer">
            <br>
            <p>
           <?= $product->description ?></p>
        </div>
        </div>
        </div>
        </div>
        
        <div class="container">
            <div class="card soft">
                <h2> Recommended Products</h2>
                <?php
                recommendedSimilar($product->category, $product->id);
                ?>
            </div>
        </div>
   
</body>
</html>
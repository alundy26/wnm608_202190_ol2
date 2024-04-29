<?php
include_once "lib/php/functions.php";
$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];


//print_p($_product);

//print_p($product);
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

<header class="navbar">
    <div class="container display-flex">
        <div class="flex-none">
            <h1>Store</h1>
        </div>
        <div class="flex-stretch"></div>
        <nav class="nav nav-flex flex-none">
        <ul>
                <li><a href="store_home.php">Home</a></li>
                <li><a href="product_list.php">Shop Now</a></li>
                <li><a href="mission.php">Our Mission</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </nav>

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
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
        </ul>
    </nav>
    <br>
    <img class= "img_left" img src="https://via.placeholder.com/400x400?text=product" alt="">
    <br>
    <div class="card-section">
        <h2><?=$product->name ?></h2>
       <p><?=$product->price ?></p>
       <h3> Description </h3>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. N
        eque, eaque quod laborum sit eos quasi ratione molestiae 
        eveniet magni libero veritatis sed? Ratione harum possimus 
        modi? Consequuntur cum deserunt eos!</p>
   

    <div class="col-xs-12 col-md-5">
    <form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">

    <input type="hidden" name="product-id" value="<?product->id ?>">


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

    <div class="card soft flat">
        <div "class="faq">
        <div class="question">
        <img class= "img_left" img src="https://via.placeholder.com/100x100?text=product" alt="">
            <h3>Details </h3>

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
   
</body>
</html>
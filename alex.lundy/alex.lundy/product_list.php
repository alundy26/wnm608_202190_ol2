 <?php
 include_once "lib/php/functions.php";
 include_once "parts/templates.php";

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

    <?php include "parts/meta.php"; ?>
    <script>
	query({type:'products_all'}).then(d=>{
		$(".productlist").html(d.result[0.price])
	});
	</script>
</head>
    	


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
        <script src="lib/js/functions.js"></script>
        <script src= "js/templates.js"></script>
     
	
</header>

<body>




<div class="container">

   
        <h1>Art Supplies</h1>
        //API and JSON Mod 12 comment all out

            <div class="form-control">
                <form class="hotdog dark" id="product-search">
                    <input type="search" placeholder="Search Products">
                </form>
        </div>
        <div class='productlist grid gap'>
</div>
</div>


      

</body>
</html>
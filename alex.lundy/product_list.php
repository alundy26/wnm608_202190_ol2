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
</header>




<div class="container">
<div class="form-control">
    <form class="hotdog dark">
        <input type="search" placeholder="Search">
    </form>
    </div>
   
        <h1>Art Supplies</h1>
        
        <?php
       
        $result = makeQuery(makeConn(), "SELECT * FROM `products` ORDER BY `date_create`
        "
        
        );

        echo "<div class='grid gap'>",array_reduce($result, 'productListTemplate'),"</div>";

       
        


        ?>
       
  


    <div class="grid gap">
           
                <div class="col-xs-12 col-md-4">
                    <figure class="figure product">
                        <img src="https://via.placeholder.com/400x400?text=product" alt="">
                        <figcaption>
                           <div><a href="product_item.php">Product 1</a> </div>
                           <div> $3.99</div>
                           <div class="favorite"> 
                                        <input type="checkbox" id="heart-example" class="hidden">
                                        <label for="heart-example">♥</label> Favorite

    </div>
                        </figcaption>
    
                    </figure>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <figure class="figure product">
                            <img src="https://via.placeholder.com/400x400?text=product" alt="">
                            <figcaption>
                            <div><a href="product_item.php">Product 2</a> </div>
                               <div> $3.99</div>
                               <div class="favorite"> 
                                        <input type="checkbox" id="heart-example" class="hidden">
                                        <label for="heart-example">♥</label> Favorite

    </div>
                            </figcaption>
        
                        </figure>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <figure class="figure product">
                                <img src="https://via.placeholder.com/400x400?text=product" alt="">
                                <figcaption>
                                <div><a href="product_item.php">Product 3</a> </div>
                                   <div> $3.99</div>
                                   <div class="favorite"> 
                                        <input type="checkbox" id="heart-example" class="hidden">
                                        <label for="heart-example">♥</label> Favorite

    </div>
                                </figcaption>
            
                            </figure>
                            </div>
        

 <br>

</div>
<div class="grid gap">
           
                <div class="col-xs-12 col-md-4">
                    <figure class="figure product">
                        <img src="https://via.placeholder.com/400x400?text=product" alt="">
                        <figcaption>
                        <div><a href="product_item.php">Product 4</a> </div>
                           <div> $3.99</div>
                           <div class="favorite"> 
                                        <input type="checkbox" id="heart-example" class="hidden">
                                        <label for="heart-example">♥</label> Favorite

    </div>
                           
                        </figcaption>
    
                    </figure>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <figure class="figure product">
                            <img src="https://via.placeholder.com/400x400?text=product" alt="">
                            <figcaption>
                            <div><a href="product_item.php">Product 5</a> </div>
                               <div> $3.99</div>
                               <div class="favorite"> 
                                        <input type="checkbox" id="heart-example" class="hidden">
                                        <label for="heart-example">♥</label> Favorite

    </div>
                            </figcaption>
        
                        </figure>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <figure class="figure product">
                                <img src="https://via.placeholder.com/400x400?text=product" alt="">
                                
                                <figcaption>
                                <div><a href="product_item.php">Product 6</a> </div>
                                   <div> $3.99</div>
                                   <div class="favorite"> 
                                        <input type="checkbox" id="heart-example" class="hidden">
                                        <label for="heart-example">♥</label> Favorite

    </div>
                                </figcaption>
            
                            </figure>
                            </div>

                            <div class="col-xs-12 col-md-4">
                            <figure class="figure product">
                                <img src="https://via.placeholder.com/400x400?text=product" alt="">
                                
                                <figcaption>
                                <div><a href="product_item.php">Product 7</a> </div>
                                   <div> $3.99</div>
                                   <div class="favorite"> 
                                        <input type="checkbox" id="heart-example" class="hidden">
                                        <label for="heart-example">♥</label> Favorite

    </div>
                                </figcaption>
            
                            </figure>
                            </div>

                            <div class="col-xs-12 col-md-4">
                            <figure class="figure product">
                                <img src="https://via.placeholder.com/400x400?text=product" alt="">
                                
                                <figcaption>
                                <div><a href="product_item.php">Product 8</a> </div>
                                   <div> $3.99</div>
                                   <div class="favorite"> 
                                        <input type="checkbox" id="heart-example" class="hidden">
                                        <label for="heart-example">♥</label> Favorite

    </div>
                                </figcaption>
            
                            </figure>
                            </div>

                            <div class="col-xs-12 col-md-4">
                            <figure class="figure product">
                                <img src="https://via.placeholder.com/400x400?text=product" alt="">
                                
                                <figcaption>
                                <div><a href="product_item.php">Product 9</a> </div>
                                   <div> $3.99</div>
                                   <div class="favorite"> 
                                        <input type="checkbox" id="heart-example" class="hidden">
                                        <label for="heart-example">♥</label> Favorite

    </div>
                                </figcaption>
            
                            </figure>
                            </div>
        
                            
                            <div class="col-xs-12 col-md-4">
                            <figure class="figure product">
                                <img src="https://via.placeholder.com/400x400?text=product" alt="">
                                
                                <figcaption>
                                <div><a href="product_item.php">Product 10</a> </div>
                                   <div> $3.99</div>
                                   <div class="favorite"> 
                                        <input type="checkbox" id="heart-example" class="hidden">
                                        <label for="heart-example">♥</label> Favorite

    </div>
                                </figcaption>
            
                            </figure>
                            </div>
                            <div class="col-xs-12 col-md-4">
                            <figure class="figure product">
                                <img src="https://via.placeholder.com/400x400?text=product" alt="">
                                
                                <figcaption>
                                <div><a href="product_item.php">Product 11</a> </div>
                                   <div> $3.99</div>
                                   <div class="favorite"> 
                                        <input type="checkbox" id="heart-example" class="hidden">
                                        <label for="heart-example">♥</label> Favorite

    </div>
                                </figcaption>
            
                            </figure>
                            </div>
                            <div class="col-xs-12 col-md-4">
                            <figure class="figure product">
                                <img src="https://via.placeholder.com/400x400?text=product" alt="">
                                
                                <figcaption>
                                <div><a href="product_item.php">Product 12</a> </div>
                                   <div> $3.99</div>
                                   <div class="favorite"> 
                                        <input type="checkbox" id="heart-example" class="hidden">
                                        <label for="heart-example">♥</label> Favorite

    </div>
                                </figcaption>
            
                            </figure>
                            </div>

 

</div>


</body>
</html>
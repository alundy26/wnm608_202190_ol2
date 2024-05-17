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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/product_list.js"></script>

    <script>
    query({type:'products_all'}).then(d=>{
        $(".productlist").html(listItemTemplate(d.result))
    });
    </script>
</head>    	
<?php include "parts/navbar.php"; ?>
<body>

    <div class="container">
            <h1>Art Supplies</h1>

                <div class="form-control">
                    <form class="hotdog dark" id="product-search">
                        <input type="search" placeholder="Search Products">
                    </form>
                </div>
                </form>
                
                <div class="form-control">
                    <div class="card soft display-flex"> 
                        <div class="flex-none">
                            <button data-filter="category" data-value="" type="button" class="form-button">All</button>
                        </div>
                        <div class="flex-none">
                            <button data-filter="category" data-value="Paint" type="button" class="form-button">Paint</button>
                        </div>
                        <div class="flex-none">
                            <button data-filter="category" data-value="Tools" type="button" class="form-button">Tools</button>
                        </div>
                        <div class="flex-none">
                            <button data-filter="category" data-value="Drawing" type="button" class="form-button">Drawing</button>
                        </div>
                        <div class="flex-none">
                            <button data-filter="category" data-value="Crafts" type="button" class="form-button">Crafts</button>
                        </div>
                <div class="flex-none">
                    <div class="form-select">
                        <select class="js-sort">
                            <option value="1">Newest</option>
                            <option value="2">Oldest</option>
                            <option value="3">Least Expensive</option>
                            <option value="4">Most Expensive</option>
                        </select>
                    </div>
                </div>
            </div>
                    

            <div class='productlist grid gap'></div>
    </div>

</body>
</html>
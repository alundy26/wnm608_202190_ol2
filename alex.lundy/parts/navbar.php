<?php
 include_once "lib/php/functions.php";
 include_once "parts/templates.php";

?>

<link rel="stylesheet" href="../lib/css/styleguide.css">
<link rel="stylesheet" href="../lib/css/gridsystem.css">
<link rel="stylesheet" href="../css/storetheme.css">

</head>
<body>

<input type="checkbox" id="menu" class="hidden">
<header class="navbar">
    <div class="container display-flex">
        <div class="flex-none">
            <h1>Art's Cool</h1>
        </div>
        <div class="flex-stretch"></div>
        <div class="flex-none menu-button">
        <label for="menu">&equiv;</label>
        <nav class="nav nav-flex flex-none">
        <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="product_list.php">Shop Now</a></li>
                <li><a href="mission.php">Our Mission</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><span>Cart</span>
                <span class="badge"><?=makeCartBadge(); ?></span></a></li>
               
                <li><a href="admin/index.php">Admin</a></li>
            </ul>
        </nav>
</header>
</div>
</header>
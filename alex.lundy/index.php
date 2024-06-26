<?php 
include_once "lib/php/functions.php"; 
include_once "parts/templates.php";
?>

    <link rel="stylesheet" href="../lib/css/styleguide.css">
    <link rel="stylesheet" href="../lib/css/gridsystem.css">
    <link rel="stylesheet" href="../css/storetheme.css">


<!DOCTYPE  html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>

    <?php include "parts/meta.php"; ?>
</head>
<body>

    <?php include "parts/navbar.php"; ?>


    </div>
        <div class="fill-parent display-flex flex-align-center flex-justify-center">
        <video autoplay muted loop class="view-window">
            <source src="img/store/webbanner.mp4" type="video/mp4">
            Your browser does not support the vidoe tag.
        </video>
    </div>

    </div>

    <div class="container">
        <div class="card soft">
            <h2>Just For You</h2>
            <p>You'll love these proucts</p>
        </div>
    </div>

    <div class="container">
        
        <h2>Recommended Tools</h2>
            <?php recommendedCategory("tools"); ?>

    </div>
</body>
</html>
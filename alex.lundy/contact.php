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

<?php include "parts/navbar.php"; ?>

<body>
    <div>
        <div class= "card soft display-flex">
            <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$create_or_update">
                <h2>Contact Us</h2>
                <div class="form-control">
                    <label class="form-label" for="guest-name">Name</label>
                    <input class="form-input" name="guest-name" id="guest-name" type="text" value="" placeholder="Enter your name">
                </div>
                <div class="form-control">
                    <label class="form-label" for="guest-email">Email</label>
                    <input class="form-input" name="guest-email" id="guest-email" type="text" value="" placeholder="Enter your Email address">
                </div>
                <div class="form-control">
                    <label class="form-label" for="user-description">Phone Number</label>
                    <input class="form-input" name="guest-email" id="guest-email" type="text" value="" placeholder="Enter your phone number">
                </div>
                <div class="form-control">
                    <label class="form-label" for="guest-message">Price</label>
                    <textarea class="form-input" name="user-description" id="user-description" placeholder="Enter your message here..."></textarea>
                </div>
                <div class= "card soft display-flex">
                    <div class="form-control">
                        <input class="form-button" type="submit" value="Send Message">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../lib/css/styleguide.css">
    <link rel="stylesheet" href="../lib/css/gridsystem.css">
    <link rel="stylesheet" href="../css/storetheme.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .accordion{
            margin: 60px auto;
            width: 600px;
        }

        .accordion li{
            list-style: none;
            width: 100%;
            margin: 20px;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 6px 6px 10px -1px rgba(0,0,0,0.15),
                        -6px -6px 10px -1px rgba(255, 255, 255, 0.7);
        }
        
        .accordion li label{
            display: flex;
            align-items: center;
            padding: 10px;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
        }

        .accordion li label::before{
            content: '+';
            margin-right: 10px;
            font-size: 24px;
            font-weight: 600;
        }
        input[type="radio"]{
            display:none;
        }

        .accordion .content{
            padding: 0 10px;
            line-height: 26px;
            max-height: 0;
            overflow:hidden;
            transition: max-height 0.5s, padding 0.5s;
        }

        .accordion input[type="radio"]:checked + label + .content{
            max-height:400px;
            padding: 10px 10px 20px;
        }

    </style>
</head>
<body>
<?php include "parts/navbar.php"; ?>
    <div class="view-window" style="background-image:url(img/missionbanner2.png)">
        <div class="fill-parent display-flex flex-align-center flex-justify center">
        </div>
    </div>
    <div class="container">
        <div class="card soft">
            <h1>Our Mission</h1>
            <p>As an art teacher, I'm constantly having to search high and low for all of the tools and materials that my students need.
                When it's time to order new supplies for the upcoming school year, I'd spend hours searching for the best deals on high quality products.
                That's why I created Art's Cool; i wanted to change that. Art's Cool is an online tool that features all of 
                necessary visual arts products, materials and crafts that a teacher could need. Art's Cool is a one stop visual art shop,
                made by art teachers, for art teachers. 
            </p>
        </div>

        <ul class="accordion">
            <li>
                <input type="radio" name="accordion" id="first" checked>
                <label for="first">Local Vendors</label>
                <div class="content">
                    <p>Our products are sourced locally through Georgia-based vendors.</p>
                </div>
            </li>
            <li>
                <input type="radio" name="accordion" id="second">
                <label for="second">Store Hours</label>
                <div class="content">
                    <p>Our in-store hours are: 
                        <ul>
                            <li><strong>Monday:</strong> Closed</li>
                            <li><strong>Tuesday:</strong> 11:00am - 6:00pm</li>
                            <li><strong>Wednesday:</strong> 11:00am - 6:00pm</li>
                            <li><strong>Thursday:</strong> 11:00am - 6:00pm</li>
                            <li><strong>Friday:</strong> 11:00am - 10:00pm</li>
                            <li><strong>Saturday:</strong> 11:00am - 10:00pm</li>
                            <li><strong>Sunday:</strong> Closed</li>
                        </ul>
                    </p>
                </div>
            </li>
            <li>
                <input type="radio" name="accordion" id="third">
                <label for="third">Teacher Discount</label>
                <div class="content">
                    <p>We offer 20% off every purchase for Georgia teachers who show their ID.</p>
                </div>
            </li>
            <li>
                <input type="radio" name="accordion" id="fourth">
                <label for="fourth">Questions</label>
                <div class="content">
                    <p>For questions or concerns, please fill out our contact form or dial 555-555-5555 to speak with an agent.</p>
                </div>
            </li>
        </ul>
    </div>
</body>
</html>

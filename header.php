<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Awesome Shop</title>
    <script src="https://kit.fontawesome.com/8c03c9aa36.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />

    <link href="./resources/assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <?php
    include('./functions.php');
    ?>
</head>

<body>
    <header>
        <nav>
            <h1>Awesome<span id="brand-name">Shop</span></h1>
            <div class="nav-link">
                <i class="far fa-question-circle"><a href="#"> Need Help</a></i>
                <button class="btn btn-join">Join</button>
            </div>
        </nav>
        <div class="intro-feature">
            <div class="intro-detail">
                <h1>Shop your designer dresses</h1>
                <p>
                    Ready to wear dresses tailored for you from online. Hurry up while
                    stock lasts.
                </p>
            </div>
            <input type="text" id="search-bar-input" placeholder="🔍 Search your products from here" />
        </div>
    </header>
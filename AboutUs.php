<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name']))
{
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style/AboutUs.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <ul class="navbar">
            <li><a href="category.php">Home</a></li>
            <li><a href="mobiles.php">Mobiles</a></li>
            <li><a href="electronics.php">Electronics</a></li>
            <li><a href="appliances.php">Appliances</a></li>
            <li><a href="fashion.php">Fashion</a></li> 
        </ul>
        <div class="cart">
            <a href="cart.html" class="carthover">
                <ion-icon name="basket"></ion-icon>Cart <span id="cartT">0</span>
            </a>
        </div>
    <div class="bx bx-menu" id="menu-icon"></div>

        <div class="header-btn">
            <a href="register_form.php" class="sign-up">Sign Up</a>
            <a href="login_form.php" class="sign-in">Sign In</a>
            <a href="logout.php" class="btn">logout</a>
        </div>
    </header>

    <!-- Home -->
    <section class="about-us" id="about-us">
        <div class="text">
            <h3>
                <span>
                    <strong>About Us</strong>
                </span>
            </h3>
            <p>
                <span>Hello and welcome to City Mart, the place to find the best Products for every taste and occasion. We thoroughly check the quality of our goods, working only with reliable suppliers so that you only receive the best quality product.</span>
            </p>
            <p>
                <span>We at City Mart believe in high quality and exceptional customer service. But most importantly, we believe shopping is a right, not a luxury, so we strive to deliver the best products at the most affordable prices, and ship them to you regardless of where you are located.</span>
            </p>
        </div>
    </section>

    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
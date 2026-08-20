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
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <title>Appliances</title>
    <link rel="stylesheet" href="style/appliances.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <header>
        <ul class="navbar">
            <li><a href="#televisions">Televisions</a></li>
            <li><a href="#washing-machine">Washing Machines</a></li>
            <li><a href="#air-conditioners">Air Conditioners</a></li>
            <li><a href="#refrigerators">Refrigerators</a></li>
            <li><a href="#home-appliances">Home Appliances</a></li>
            <li><a href="#kitchen-appliances">Kitchen Appliances</a></li>
        </ul>
        <div class="bx bx-menu" id="menu-icon"></div>
        <div class="cart">
            <a href="cart.html" class="carthover">
                <ion-icon name="basket"></ion-icon>Cart <span id="cartT">0</span>
            </a>
        </div>
    </header>
    
    <section>
        <h1>Televisions</h1>
        <div class="televisions" id="televisions">
            <div class="hover">
                <img src="images/realme tv.png" height="300px" width="300px">
                <h3>Realme Smart TV</h3>
                <h3>₹30,999</h3>
                <button class="add-cart cart1 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="Images/oneplus.png" height="300px" width="300px">
                <h3>OnePlus U Series</h3>
                <h3>₹52,999</h3>
                <button class="add-cart cart1 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="Images/sony tv.png" height="200px" width="300px">
                <h3>Sony Bravia </h3>
                <h3>₹67,900</h3>
                <button class="add-cart cart1 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="Images/samsung tv.png" height="200px" width="300px">
                <h3>Samsung QLED</h3>
                <h3>₹3,14,900</h3>
                <button class="add-cart cart1 shop-item-button" type="button">Add To Cart</button>
            </div>
        </div>
    </section>

    <section>
        <h1>Washing Machines</h1>
        <div class="washing-machine" id="washing-machine">
            <div class="hover">
                <img src="images/Whirlpool 5 Star Fully-Automatic.jpg" height="300px" width="300px">
                <h3>Whirlpool Fully-Automatic</h3>
                <h3>₹19,999</h3>
                <button class="add-cart cart2 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="images/Samsung Fully Automatic.jpg" height="300px" width="300px">
                <h3>Samsung Fully Automatic</h3>
                <h3>₹50,999</h3>
                <button class="add-cart cart2 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="images/LG Fully Automatic.jpg" height="300px" width="300px">
                <h3>LG Fully Automatic</h3>
                <h3>₹23,900</h3>
                <button class="add-cart cart2 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="" height="300px" width="300px">
                <h3></h3>
                <h3>₹</h3>
                <button class="add-cart cart2 shop-item-button" type="button">Add To Cart</button>
            </div>
        </div>
    </section>

    <section>
        <h1>Air Conditioners</h1>
        <div class="air-conditioners" id="air-conditioners">
            <div class="hover">
                <img src="images/samsung AR12RV.png" height="200px" width="300px">
                <h3>Samsung AR12RV</h3>
                <h3>₹58,999</h3>
                <button class="add-cart cart3 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="images/LG Air Conditioner.png" height="200px" width="300px">
                <h3>LG Air Conditioner</h3>
                <h3>₹32,999</h3>
                <button class="add-cart cart3 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="images/LG Slit Air Conditioner.png" height="200px" width="300px">
                <h3>LG Slit Air Conditioner</h3>
                <h3>₹54,900</h3>
                <button class="add-cart cart3 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="images/samsung AR12RV.png" height="200px" width="300px">
                <h3>Voltas Inverter Slit Air</h3>
                <button class="add-cart cart3 shop-item-button" type="button">Add To Cart</button>
            </div>
        </div>
    </section>

    <section>
        <h1>Refrigerators</h1>
        <div class="refrigerators" id="refrigerators">
            <div class="hover">
                <img src="images/Samsung 253 ltr Refrigerator.png.png" height="300px" width="300px">
                <h3>Samsung 253 ltrs. Refrigerator</h3>
                <h3>₹30,999</h3>
                <button class="add-cart cart4 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="images/LG 654 Ltr Refrigerator.png" height="300px" width="300px">
                <h3>LG 654 Ltr Refrigerator</h3>
                <h3>₹104,999</h3>
                <button class="add-cart cart4 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="images/Whirlpool 603 L.jpg" height="200px" width="300px">
                <h3>Whirlpool 603 L </h3>
                <h3>₹67,900</h3>
                <button class="add-cart cart4 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="images/Godrej 236L.png" height="200px" width="300px">
                <h3>Godrej 236L</h3>
                <h3>₹44,900</h3>
                <a class="add-cart cart4" href="#">Add Cart</a>
            </div>
        </div>
    </section>

    <section>
        <h1>Home Appliances</h1>
        <div class="home-appliances" id="home-appliances">
            <div class="hover">
                <img src="" height="300px" width="300px">
                <h3></h3>
                <h3>₹</h3>
                <button class="add-cart cart4 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="" height="300px" width="300px">
                <h3></h3>
                <h3>₹</h3>
                <button class="add-cart cart4 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="" height="300px" width="300px">
                <h3></h3>
                <h3>₹</h3>
                <button class="add-cart cart4 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="" height="300px" width="300px">
                <h3></h3>
                <h3>₹</h3>
                <button class="add-cart cart4 shop-item-button" type="button">Add To Cart</button>
            </div>                 
        </div>
    </section>

    <section>
        <h1>Kitchen Appliances</h1>
        <div class="kitchen-appliances" id="kitchen-appliances">
            <div class="hover">
                <img src="" height="300px" width="300px">
                <h3></h3>
                <h3>₹</h3>
                <button class="add-cart cart5 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="" height="300px" width="300px">
                <h3></h3>
                <h3>₹</h3>
                <button class="add-cart cart5 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="" height="300px" width="300px">
                <h3></h3>
                <h3>₹</h3>
                <button class="add-cart cart5 shop-item-button" type="button">Add To Cart</button>
            </div>
            <div class="hover">
                <img src="" height="300px" width="300px">
                <h3></h3>
                <h3>₹</h3>
                <button class="add-cart cart5 shop-item-button" type="button">Add To Cart</button>
            </div>
        </div>
    </section>

    <section class="container content-section">
            <h2 class="section-header">Cart</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">Item</span>
                <span class="cart-price cart-header cart-column">Price</span>
                <span class="cart-quantity cart-header cart-column">Quantity</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">₹0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">Purchase</button>
        </section>

    <!-- <div class="formContainer">
        <form action="submit.php" method="POST">

            <label>Product Name</label><br>
            <input type="text" name="productName" id="productName" placeholder="Enter Product Name"><br><br>
            <label>Product Quantity</label><br>
            <input type="text" name="productQuantity" id="productQuantity" placeholder="Product Quantity"><br><br>
            <label>Product Price</label><br>
            <input type="text" name="productPrice" id="productPrice" placeholder="Product Price"><br><br>
            <button type="submit">Add to Cart</button>
      
        </form>
    </div> -->

    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="js/mobiles.js"></script>
    <script src="js/appliances.js"></script>
    <script src="js/cart01.js"></script>

</body>
</html>
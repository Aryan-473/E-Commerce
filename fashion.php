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
    <title>Fashion</title>
    <link rel="stylesheet" href="style/fashion.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <header>
        <ul class="navbar">
            <li><a href="#tshirts">Tshirts</a></li>
            <li><a href="#hoodies">Hoodies</a></li>
            <li><a href="#swear-shirts">SweatShirts</a></li>               
        </ul>
        <div class="bx bx-menu" id="menu-icon"></div>

    <div class="cart">
        <a href="cart.html" class="carthover">
            <ion-icon name="basket"></ion-icon>Cart <span id="cartT">0</span>
        </a>
    </div>
    </header>
    
    <section>
    <h1>Tshirts</h1>
    <div class="tshirts" id="tshirts">
        <div class="hover">
            <img src="images/orange tshirt.png" height="200px" width="200px">
            <h3>orange Tshirt</h3>
            <h3>30,999</h3>
            <button class="add-cart cart1 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/black tshirt.png" height="200px" width="300px">
            <h3>Black Tshirt</h3>
            <h3>52,999</h3>
            <button class="add-cart cart1 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/red tshirt.png" height="200px" width="200px">
            <h3>Red Tshirt</h3>
            <h3>67,900</h3>
            <button class="add-cart cart1 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/grey tshirt.png" height="200px" width="200px">
            <h3>Grey Tshirt</h3>
            <h3>3,14,900</h3>
            <button class="add-cart cart1 shop-item-button" type="button">Add To Cart</button>
        </div>
    </div>
    </section>

    <section>
    <h1>Hoddies</h1>
    <div class="hoodies" id="hoodies">
        <div class="hover">
            <img src="images/black hoodie.jpg" height="200px" width="200px">
            <h3>Black Hoodie</h3>
            <h3>299.00</h3>
            <button class="add-cart cart2 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/grey hoodie.png" height="200px" width="200px">
            <h3>Grey Hoodie</h3>
            <h3>299.00</h3>
            <button class="add-cart cart2 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/blue hoodie.png" height="200px" width="200px">
            <h3>Blue Hoodie</h3>
            <h3>299.00</h3>
            <button class="add-cart cart2 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/red hoodie.png" height="200px" width="200px">
            <h3>Red Tshirt</h3>
            <h3>67,900</h3>
            <button class="add-cart cart2 shop-item-button" type="button">Add To Cart</button>
        </div>
    </div>
    </section>

    <section>
    <h1>Sweat Shirts</h1>
    <div class="sweat-shirts" id="sweat-shirts">
        <div class="hover">
            <img src="images/black sweatshirt.png" height="200px" width="200px">
            <h3>Black SweatShirts</h3>
            <h3>499.00</h3>
            <button class="add-cart cart3 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/white seatshirt.png" height="200px" width="200px">
            <h3>White SweatShirts</h3>
            <h3>499.00</h3>
            <button class="add-cart cart3 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/green sweatshirt.png" height="200px" width="200px">
            <h3>Green SweatShirts</h3>
            <h3>499.00</h3>
            <button class="add-cart cart3 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/red sweatshirt.png" height="200px" width="200px">
            <h3>Red SweatShirts</h3>
            <h3>499.00</h3>
            <button class="add-cart cart3 shop-item-button" type="button">Add To Cart</button>
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
    <script src="js/fashion.js"></script>
    <script src="js/cart01.js"></script>

</body>
</html>
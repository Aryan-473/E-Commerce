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
    <title>Mobiles</title>
    <link rel="stylesheet" href="style/mobiles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <header>
            <ul class="navbar">
                <li><a href="#realme">Realme</a></li>
                <li><a href="#oneplus">OnePlus</a></li>
                <li><a href="#apple">Apple</a></li>
                <li><a href="#vivo">Vivo</a></li>
                <li><a href="#oppo">Oppo</a></li>                
            </ul>
            <div class="bx bx-menu" id="menu-icon"></div>
    
        <div class="cart">
            <a href="cart.html" class="carthover">
                <ion-icon name="basket"></ion-icon>Cart <span id="cartT">0</span>
            </a>
        </div>
    </header>

    <section>
    <h1 align="center">Realme</h1>
    <div class="realme" id="realme">        
        <div class="box">
            <img class="shop-item-image" src="images/realme gt me.png" height="200px" width="200px">      
            <h3 class="shop-item-title">Realme GT Master Edition</h3>
            <h3 class="shop-item-price">₹33999.00</h3>
            <button class="add-cart cart1 shop-item-button" type="button">Add To Cart</button>
        </div>     
        <div class="box">
            <img class="shop-item-image" src="images/realme gt.png" height="200px" width="150px">
            <h3 class="shop-item-title">Realme Gt</h3>
            <h3 class="shop-item-price">₹27990.00</h3>
            <button class="add-cart cart1 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="box">
            <img class="shop-item-image" src="images/realme 8.png" height="200px" width="200px">
            <h3 class="shop-item-title">Realme 8</h3>
            <h3 class="shop-item-price">₹18999.00</h3> 
            <button class="add-cart cart1 shop-item-button" type="button">Add To Cart</button>
        </div> 
        <div class="box">
            <img class="shop-item-image" src="images/realme 8pro.png" height="200px" width="100px">
            <h3 class="shop-item-title">Realme 8Pro</h3>
            <h3 class="shop-item-price">₹20999.00</h3>
            <button class="add-cart cart1 shop-item-button" type="button">Add To Cart</button>
        </div>
    </div>
    </section>

    <section>
    <h1 align="center">OnePlus</h1>
    <div class="oneplus" id="oneplus">
        <div class="box">
            <img class="shop-item-image" src="images\oneplus 9.png" height="200px" width="200px">
            <h3 class="shop-item-title">Oneplus 9</h3>
            <h3 class="shop-item-price">₹39999.00</h3>
            <button class="add-cart cart2 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="box">
            <img class="shop-item-image" src="images\oneplus 9pro.png" height="200px" width="200px">
            <h3 class="shop-item-title">Oneplus 9Pro</h3>
            <h3 class="shop-item-price">₹39999.00</h3>
            <button class="add-cart cart2 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="box">
            <img class="shop-item-image" src="images\oneplus 9r.png" height="200px" width="200px">
            <h3 class="shop-item-title">OnePlus 9R</h3>
            <h3 class="shop-item-price">₹29999.00</h3>
            <button class="add-cart cart2 shop-item-button" type="button">Add To Cart</button>
        </div>
    </div>
    </section>

    <section>
    <h1 align="center">Apple</h1>
    <div class="apple" id="apple">
        <div class="box">
            <img class="shop-item-image" src="images/iphone 12.png" height="200px" width="200px">
            <h3 class="shop-item-title">iphone 12</h3>
            <h3 class="shop-item-price">₹98990.00</h3>
            <button class="add-cart cart3 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="box">
            <img class="shop-item-image" src="images/iphone 12pro.png" height="200px" width="200px">
            <h3 class="shop-item-title">iphone 12Pro</h3>
            <h3 class="shop-item-price">₹154690.00</h3>
            <button class="add-cart cart3 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="box">
            <img class="shop-item-image" src="images/iphone 11.png" height="200px" width="200px">
            <h3 class="shop-item-title">iphone 11</h3>
            <h3 class="shop-item-price">₹99990.00</h3>
            <button class="add-cart cart3 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="box">
            <img class="shop-item-image" src="images/iphone 11pro.png" height="200px" width="200px">
            <h3 class="shop-item-title">iphone 11Pro</h3>
            <h3 class="shop-item-price">₹94590.00</h3>
            <button class="add-cart cart3 shop-item-button" type="button">Add To Cart</button>
        </div>
    </div>
    </section>

    <section>
    <h1 align="center">Vivo</h1>
    <div class="vivo" id="vivo">
        <div class="box">
            <img class="shop-item-image" src="images/vivo v25pro.png" height="200px" width="200px">
            <h3 class="shop-item-title">Vivo V25Pro</h3>
            <h3 class="shop-item-price">₹39990.00</h3>
            <button class="add-cart cart4 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="box">
            <img class="shop-item-image" src="images/vivo x80pro.jpg" height="200px" width="200px">
            <h3 class="shop-item-title">Vivo X80Pro</h3>
            <h3 class="shop-item-price">₹84903.00</h3>
            <button class="add-cart cart4 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="box">
            <img class="shop-item-image" src="images/vivo x60pro.jpg" height="200px" width="200px">
            <h3 class="shop-item-title">Vivo X60Pro</h3>
            <h3 class="shop-item-price">₹54990.00</h3>
            <button class="add-cart cart4 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="box">
            <img class="shop-item-image" src="images/vivo v23pro.jpg" height="200px" width="200px">
            <h3 class="shop-item-title">Vivo V23Pro</h3>
            <h3 class="shop-item-price">₹21499.00</h3>
            <button class="add-cart cart4 shop-item-button" type="button">Add To Cart</button>
        </div>
    </div>
    </section>

    <section>
    <h1 align="center">Oppo</h1>
    <div class="oppo" id="oppo">
    <div class="box">
            <img class="shop-item-image" src="images/Oppo Reno 8Pro.jpg" height="200px" width="200px">
            <h3 class="shop-item-title">Oppo Reno 8Pro</h3>
            <h3 class="shop-item-price">₹29999.00</h3>
            <button class="add-cart cart5 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="box">
            <img class="shop-item-image" src="images/Oppo F21Pro.png" height="200px" width="200px">
            <h3 class="shop-item-title">Oppo F21Pro</h3>
            <h3 class="shop-item-price">₹20999.00</h3>
            <button class="add-cart cart5 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="box">
            <img class="shop-item-image" src="images/Oppo Reno 7Pro.jpg" height="200px" width="200px">
            <h3 class="shop-item-title">Oppo Reno 7Pro</h3>
            <h3 class="shop-item-price">₹28999.00</h3>
            <button class="add-cart cart5 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="box">
            <img class="shop-item-image" src="images/Oppo F17Pro.jpg" height="200px" width="200px">
            <h3 class="shop-item-title">Oppo F17Pro</h3>
            <h3 class="shop-item-price">₹21499.00</h3>
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
    <script src="js/category.js"></script>
    <script src="js/cart01.js"></script>
</body>
</html>
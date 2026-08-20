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
    <title>Electronics</title>
    <link rel="stylesheet" href="style/electronics.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <header>
        <ul class="navbar">
            <li><a href="#laptops">Laptops</a></li>
            <li><a href="#tablets">Tablets</a></li>
            <li><a href="#storage">Storage</a></li>
            <li><a href="#smart-wearables">Smart Wearables</a></li>
            <li><a href="#power-banks">Power Banks</a></li>
            <li><a href="#camera">Camera</a></li>
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>

        <div class="cart">
            <a href="cart.html" class="carthover">
                <ion-icon name="basket"></ion-icon>Cart <span id="cartT">0</span>
            </a>
        </div>
    </header>

    <section>
    <h1>Laptops</h1>
    <div class="laptops" id="laptops">
        <div class="hover">
            <img src="images/asus rog.png" height="150px" width="250px">
            <h3>Asus Rog Strix</h3>
            <h3>69,990</h3>
            <button class="add-cart cart1 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/acer aspire 7.png" height="150px" width="250px">
            <h3>Acer Aspire 7</h3>
            <h3>56,990</h3>
            <button class="add-cart cart1 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/realme slim.png" height="150px" width="200px">        
            <h3>Realme Slim</h3>
            <h3>56,990</h3>
            <button class="add-cart cart1 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/msi.png" height="150px" width="200px">
            <h3>MSI</h3>
            <h3>58,990</h3>
            <button class="add-cart cart1 shop-item-button" type="button">Add To Cart</button>
        </div>
    </div>
    </section>

    <section>
    <h1>Tablets</h1>
    <div class="tablets" id="tablets">
        <div class="hover">
            <img src="images/ipad air.png" height="200px" width="200px">
            <h3>Ipad Air 4th Generation</h3>
            <h3>51,900</h3>
            <button class="add-cart cart2 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/samsung tablet.png" height="200px" width="250px">
            <h3>Samsung Tablet</h3>
            <h3>46,999</h3>
            <button class="add-cart cart2 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/honor tablet.png" height="200px" width="200px">
            <h3>Honor Tab</h3>
            <h3>11,999</h3>
            <button class="add-cart cart2 shop-item-button" type="button">Add To Cart</button>
        </div>
    </div>
    </section>


    <section>
    <h1>Storage</h1>
    <div class="storage" id="storage">
        <div class="hover">
            <img src="images/samsung HDD.png" height="200px" width="200px">
            <h3>Samsung External HDD</h3>
            <h3>10,499</h3>
            <button class="add-cart cart3 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">            
            <img src="images/wd HDD.png" height="200px" width="200px">
            <h3>WD External HDD</h3>
            <h3>3,799</h3>
            <button class="add-cart cart3 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/seagate HDD.png" height="200px" width="200px">
            <h3>Seagate External HDD</h3>
            <h3>3,999</h3>
            <button class="add-cart cart3 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/sandisk SSD.png" height="200px" width="200px">
            <h3>Sandisk External SSD</h3>
            <h3>10,289</h3>
            <button class="add-cart cart3 shop-item-button" type="button">Add To Cart</button>
        </div>
    </div>
    </section>


    <section>
    <h1>Smart Wearables</h1>
    <div class="smart-wearables" id="smart-wearables">
        <div class="hover">
            <img src="images/realme watch.png" height="200px" width="200px">
            <h3>Realme Watch 2</h3>
            <h3>3,499</h3>
            <button class="add-cart cart4 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/apple watch.png" height="200px" width="200px">
            <h3>Apple Watch Series 3</h3>
            <h3>22,900</h3>
            <button class="add-cart cart4 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/honor watch.png" height="200px" width="150px">
            <h3>Honor Watch</h3>
            <h3>11,999</h3>
            <button class="add-cart cart4 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/redmi watch.png" height="200px" width="200px">
            <h3>Redmi Watch</h3>
            <h3>3,9999</h3>
            <button class="add-cart cart4 shop-item-button" type="button">Add To Cart</button>
        </div>
    </div>
    </section>


    <section>
    <h1>Power Banks</h1>
    <div class="power-banks" id="power-banks">
        <div class="hover">
            <img src="images/realme power bank.png" height="200px" width="200px">
            <h3>Realme Power Bank</h3>
            <h3>1,999</h3>
            <button class="add-cart cart5 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/oneplus power bank4.png" height="200px" width="200px">
            <h3>OnePlus Power Bank</h3>
            <h3></h3>
            <button class="add-cart cart5 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">]
            <img src="images/mi power bank.png" height="200px" width="200px">
            <h3>Mi Power Bank</h3>
            <h3>1,699</h3>
            <button class="add-cart cart5 shop-item-button" type="button">Add To Cart</button>
        </div>
    </div>
    </section>

    <section>
    <h1>Camera</h1>
    <div class="camera" id="camera">
        <div class="hover">
            <img src="images/sony camera.png" height="200px" width="300px">
            <h3>Sony Alpha Camera</h3>
            <h3>84,999</h3>
            <button class="add-cart cart6 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/nikon camera.png" height="200px" width="300px">
            <h3>Nikon D7500 DSLR</h3>
            <h3>78,999</h3>
            <button class="add-cart cart6 shop-item-button" type="button">Add To Cart</button>
        </div>
        <div class="hover">
            <img src="images/gopro hero 9.png" height="200px" width="300px">
            <h3>GoPro Hero9</h3>
            <h3>38,648</h3>
            <button class="add-cart cart6 shop-item-button" type="button">Add To Cart</button>
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
    <script src="js/electronics.js"></script>
    <script src="js/car01.js"></script>

</body>
</html>
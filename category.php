<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name']))
{
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <title>Category</title>
    <link rel="stylesheet" href="style/category.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <header>
            <ul class="navbar">
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
    <section class="slider-box">
        <div class="content">
                <div class="images">
                    <a href="mobiles.php"><img src="images/iphone 12pro.png"></a>
                    <a href="electronics.php"><img src="images/asus rog.png"></a>
                    <a href="appliances.php"><img src="images/realme tv.png"></a>
                    <a href="fashion.php"><img src="images/red hoodie.png"></a>
                    <!-- <a href=""><img src="images/iphone 12pro.png"></a> -->
                </div>
            <div class="btm-slides">
                <span onclick="btm_slide(1)"></span>
                <span onclick="btm_slide(2)"></span>
                <span onclick="btm_slide(3)"></span>
                <span onclick="btm_slide(4)"></span>
                <span onclick="btm_slide(5)"></span>
            </div>
            <div class="sliders left" onclick="side_slide(-1)">
                <span class="fas fa-angle-left"></span>
            </div>
            <div class="sliders right" onclick="side_slide(1)">
                <span class="fas fa-angle-right"></span>
            </div>
        </div>
    </section>

    <script>
        var indexValue = 1;
        showImg(indexValue);
        function btm_slide(e){showImg(indexValue = e);}
        function side_slide(e){showImg(indexValue += e);}
        function showImg(e)
        {
            var i;
            const img = document.querySelectorAll('img');
            const slider = document.querySelectorAll('.btm-slides span');
            if(e > img.length){indexValue = 1}
            if(e < 1){indexValue = img.length}
            for(i = 0; i < img.length; i++)
            {
                img[i].style.display = "none";
            }
            for(i = 0; i < slider.length; i++)
            {
                slider[i].style.background = "rgba(255,255,255,0.1)";
            }
            img[indexValue-1].style.display = "block";
            slider[indexValue-1].style.background = "white";
        }        
    </script>

    <!-- <p><h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dicta quos fugit exercitationem in officia modi, nesciunt error ut obcaecati nihil, pariatur aliquam, possimus sint nobis. Praesentium molestias quis architecto?</h1></p> -->

    <!-- Footer -->
    <footer>
        <div class="footer">   
            <div class="container">
                <div class="row">            
                    <div class="footer-col-2">
                        <ul style="list-style-type: none;">
                            <h3> Get to know us </h3>
                            <a href="AboutUs.php"><li> About us</li></a>
                            <li> Contact us </li>
                            <li> Email us </li>
                        </ul>
                    </div>       
                    <div class="footer-col-3">
                        <ul style="list-style-type: none;" >
                            <h3> Follow us on </h3>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                        </ul>
                    </div> 
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="js/mobiles.js"></script>
    <script src="js/main.js"></script>
</body>
</html> 
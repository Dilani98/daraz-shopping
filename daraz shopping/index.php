<?php

 include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daraz</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- icons -->
</head>
<body>
    <!-- navbar top -->
    <div class="container">
        <div class="navbar-top">
            <div class="social-link">
                <i><img src="./image/twitter.png" alt="" width="30px"></i>
                <i><img src="./image/facebook.png" alt="" width="30px"></i>
                <i><img src="./image/google-plus.png" alt="" width="30px"></i>
            </div>
            <div class="logo">
                <h3>Daraz</h3>
            </div>
            <div class="icons">
                <i><img src="./image/search.png" alt="" width="20px"></i>
                <i><img src="./image/heart.png" alt="" width="20px"></i>
                <i><img src="./image/shopping-cart.png" alt="" width="25px"></i>
            </div>
        </div>
    </div>
    <!-- navbar top -->

    <!-- main content -->
    <div class="main-content">
        <nav class="navbar navbar-expand-md" id="navbar-color">
           <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span><i><img src="./image/menu.png" alt="" width="30px"></i></span>
            </button>
          
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Offers.php">Offers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Protect.php">Protect</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
              </ul>
            </div>
           </div> 
        </nav>

        <div class="content text-left" style="margin-top: 10px;">
            <h1>Welcome to UDA<br>UDA Accommodation</h1>
           
        </div>
    </div>

    <!-- About Section -->
    <div class="container">
        <h1 class="text-center" style="margin-top: 50px;">UDA Enterprises</h1>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6 py-3 py-md-0">
                <div class="card">
                    <img src="./image/stock-vector-shopping-woman-silhouette.jpeg" alt="">
                </div>
            </div>
            <div class="col-md-6 py-3 py-md-0">
            <p>Discover amazing special offers on Daraz! Whether you’re looking for the latest gadgets, fashionable clothing, or home essentials, our platform has something for everyone. Don’t miss out on exclusive discounts and deals that will make your shopping experience even more enjoyable.</p>

<p>Shop now and take advantage of these fantastic promotions while they last. With easy navigation and a secure checkout process, Daraz makes online shopping a breeze. Start exploring our diverse range of products and enjoy the convenience of shopping from the comfort of your home!</p>
                <a href="#" class="btn btn-dark" style="background-color: #db3058; border-color: #db3058;">Read more</a><br>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="text-center" style="padding-top: 30px;">We're Offering</h3>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="image/shopping-vector-white-background_889056-50662.avif" alt="" class="card image-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-titel text-center">UDA Apparal</h5>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="image/shopping-4-5.jpg" alt="" class="card image-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-titel text-center">UDA Foreign Employment</h5>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                       
                    </div>
                </div>
            </div>
            <!---offers-->
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="image\images (1).jpeg" alt="" class="card image-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-titel text-center">UDA Accmmoedation</h5>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- card2-->
        <div class="container">
        <h3 class="text-center" style="margin-top: 50px;">Take A Look Our Productes</h3>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" id="c">
                    <img src="image\shopping1.png" alt="" class="card image-top">
                    
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" id="c">
                    <img src="image\shopping 2.jpeg" alt="" class="card image-top"> 
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" id="c">
                    <img src="image\blank-t-shirt-png-30.png" alt="" class="card image-top">    
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" id="c">
                    <img src="image\images (2).jpeg" alt="" class="card image-top">
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" id="c">
                    <img src="image\images (3).jpeg" alt="" class="card image-top">
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" id="c">
                    <img src="image\images (5).jpeg" alt="" class="card image-top">
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" id="c">
                    <img src="image\images (4).jpeg" alt="" class="card image-top">
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" id="c">
                    <img src="image\images (6).jpeg" alt="" class="card image-top">
            </div>
        </div>
    </div>
 

    <!-- Contact Form -->
    <div class="container">
        <h3 class="text-center" style="margin-top: 50px;">Contact Us</h3>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6 py-3 py-md-0">
                <div class="contact" style="padding: 20px; border: 1px solid #ccc; border-radius: 8px;">
                    <p>
                        <i class="bx bx-envelope"></i> <strong>Email:</strong> <a href="mailto:dilanirenganathan1234@gmail.com">dilanirenganathan1234@gmail.com</a>
                    </p>
                    <p>
                        <i class="bx bx-phone"></i> <strong>Phone Number:</strong> <a href="tel:07689441100024">07689441100024</a>
                    </p>
                    <p>
                        <i class="bx bx-map"></i> <strong>Address:</strong> Kataboola Top Division, Kataboola, Namawapitiya
                    </p>
                </div>
            </div>

            <div class="col-md-6 py-3 py-md-0">
                <div class="contact-box" style="padding: 20px; border: 1px solid #ccc; border-radius: 8px;">
                    <form action="config.php" method="post">
                        <input type="text" name="name" class="form-control mb-3" placeholder="Name" required>
                        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
                        <textarea name="message" class="form-control mb-3" rows="5" placeholder="Message" required></textarea>
                        <button type="submit" name="submit" class="btn btn-dark btn-block" style="background-color: #db3058; border-color: #db3058;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="text-center mb-3">
                <img src="image/images (1).jpeg" alt="Daraz Logo" style="max-width: 150px;"> 
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h1>Daraz Shopping</h1>
                    <p>"Daraz is a leading online shopping platform in South Asia..."</p>
                </div>
                <div class="col-md-6 text-right">
                    <p><strong>Email:</strong> <a href="mailto:dilanirenganathan1234@gmail.com">dilanirenganathan1234@gmail.com</a></p>
                    <p><strong>Phone Number:</strong> <a href="tel:+94112345678">+076 1234576</a></p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

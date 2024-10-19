<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daraz</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Icons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Navbar top -->
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
    
    <div class="container">
        <h3 class="text-center" style="margin-top: 50px;">Contact Us</h3>
        <div class="row" style="margin-top: 50px;">
            <!-- Contact Information -->
            <div class="col-md-6 py-3 py-md-0">
                <div class="contact" style="padding: 20px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
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

            <!-- Contact Form -->
            <div class="col-md-6 py-3 py-md-0">
                <div class="contact-box" style="padding: 20px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <form action="config.php" method="post">
                        <!-- Added 'name' attributes -->
                        <input type="text" name="name" class="form-control mb-3" placeholder="Name" required>
                        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
                        <textarea name="message" class="form-control mb-3" rows="5" placeholder="Message" required></textarea>
                        <button type="submit" name="submit" class="btn btn-dark btn-block" style="background-color: #db3058; border-color: #db3058;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<?php
  
  require './components/connection.php';
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Zone - Product Details</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/product_details.css">
</head>
<body>
    <!-- Navbar Starts Here -->
    <div class="upper-layer"> </div>
    <nav id="navbar">
          <div class="nav-left">
            <a href="index.php">
                <h4 class="logo"><i class="fa-solid fa-truck-fast"></i> <span>Shopping Zone</span></h4>
            </a>
            <form action="">
              <input type="search" name="searchInput" placeholder="Search for Products, brands and more" id="searchInput" />
              <div>
                <a href="search.php"><i class="fa-solid fa-magnifying-glass"></i></a>
              </div>
            </form>
          </div>
          <div class="nav-right">
            <span id="user">
            <?php echo isset($_SESSION['user']) ? ucwords($_SESSION['user']) : 'User' ?>
              <i class="fa-solid fa-caret-down" style="transition: rotate 0.2s ease"></i></span>
            <span><a href="cart.php">Cart <i class="fa-solid fa-cart-shopping"></i></a></span>
            <i class="fa-solid fa-bars"></i>
          </div>
    </nav>
  
      <div class="nav-menu">
        <div id="tooltip"><i class="fa-solid fa-caret-down"></i></div>
        <div class="menu">
          <a href="profile.php"><i class="fa-solid fa-user"></i> <span>My Profile</span></a>
        </div>
        <div class="menu">
          <a href="order.php"><i class="fa-solid fa-basket-shopping"></i> <span>Orders</span></a>
        </div>
        <div class="menu">
          <a href="wishlist.php"><i class="fa-solid fa-hand-holding-heart"></i>
          <span>Wishlist</span></a>
        </div>
        <div class="menu">
          <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i> <span>Cart</span></a>
        </div>
        <div class="menu">
            <a href="index.php"><i class="fa-solid fa-house-chimney"></i> <span>Home</span></a>
        </div>
        <div class="menu">
          <a href="#"><i class="fa-solid fa-power-off"></i> <span>Logout</span></a>
        </div>
      </div>
      <!-- Navbar Ends Here -->


      <!-- Hero Section Starts Here -->
       <section>
            <div class="container-md box">
                <div class="img-box">
                    <img src="images/iphone.jpeg" alt="Image">
                </div>
                <div class="details-box">
                    <h5>Product : <span>iPhone 13 - 8GB/ 128 GB</span></h5>
                    <h5>Price : <span> ₹76,000 </span> </h5>
                    <p><span>Description :</span> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut, temporibus doloremque vero corporis possimus hic quibusdam eius debitis similique rerum!</p>
                    <a href="#"><button id="cart-btn">Add to Cart</button></a>
                    <a href="#"><button id="wishlist-btn">Add to Wishlist</button></a>
                    <div>
                      <a href="#"><button id="order-btn">Place Order</button></a>
                    </div>
                </div>
            </div>
       </section>
      <!-- Hero Section Ends Here -->


    <!-- Footer Starts Here -->
    <div class="container-fluid px-2 py-4" style="background-color: rgb(43, 2, 65);">
    <div class="container text-light">

      <div class="row">
        <div class="col col-12 col-md-3 pt-3">
          <span class="fw-bold">SHOPPING ZONE</span>
          <p class="pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
        </div>

        <div class="col col-12 col-md-2 pt-3">
          <span class="fw-bold">MENU</span>

          <p class="pt-3">Shop</p>
          <p>About</p>
          <p>Journal</p>
          <p>Contact Us</p>
        </div>

        <div class="col col-12 col-md-3 pt-3">
          <span class="fw-bold">HELP</span>

          <p class="pt-3">Shipping Information</p>
          <p>Returns & Exchange</p>
          <p>Terms & Conditions</p>
          <p>Privacy Policy</p>
        </div>

        <div class="col col-12 col-md-4 pt-3">
          <span class="fw-bold">HAVE A QUESTIONS?</span>

          <div class="row pt-3">
            <div class="col col-1">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="col col-11">
              <span>203 Fake St. Mountain View, San Francisco, California, USA</span>
            </div>
          </div>

          <div class="row py-3">
            <div class="col col-1">
              <i class="fa-solid fa-phone"></i>
            </div>
            <div class="col col-11">
              <span>+2 392 3929 210</span>
            </div>
          </div>

          <div class="row">
            <div class="col col-1">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="col col-11">
              <span>info@yourdomain.com</span>
            </div>
          </div>


        </div>
      </div>
    </div>
    <div class="text-center pt-5 text-light">
      <p>Copyright ©2024 All rights reserved</span>
      </p>
    </div>
    </div>
    <!-- Footer Ends Here -->


    <script src="js/nav.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
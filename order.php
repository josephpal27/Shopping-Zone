<?php

    require './components/userAuth.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Zone - Orders</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/order.css">
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
              Joseph
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
          <a href="logout.php"><i class="fa-solid fa-power-off"></i> <span>Logout</span></a>
        </div>
      </div>
      <!-- Navbar Ends Here -->


    <!-- Hero Section Starts Here -->
     <section>
        <div class="container">
            <!-- Left Side -->
            <aside>
                <div class="filter">
                    <h5>Filters</h5>
                </div>
                <div class="filter">
                    <h6>ORDER STATUS</h6>
                    <div class="filter-options">
                        <div>
                            <input type="checkbox" name="checkbox"> <span>On the Way</span>
                        </div>
                        <div>
                            <input type="checkbox" name="checkbox"> <span>Delivered</span>
                        </div>
                        <div>
                            <input type="checkbox" name="checkbox"> <span>Cancelled</span>
                        </div>
                        <div>
                            <input type="checkbox" name="checkbox"> <span>Returned</span>
                        </div>
                    </div>
                </div>
                <div class="filter">
                    <h6>ORDER TIME</h5>
                    <div class="filter-options">
                        <div>
                            <input type="checkbox" name="checkbox"> <span>Last 30 Days</span>
                        </div>
                        <div>
                            <input type="checkbox" name="checkbox"> <span>2023</span>
                        </div>
                        <div>
                            <input type="checkbox" name="checkbox"> <span>2022</span>
                        </div>
                        <div>
                            <input type="checkbox" name="checkbox"> <span>2021</span>
                        </div>
                        <div>
                            <input type="checkbox" name="checkbox"> <span>2020</span>
                        </div>
                        <div>
                            <input type="checkbox" name="checkbox"> <span>Older</span>
                        </div>
                    </div>
                </div>
                <button id="apply-btn">APPLY</button>
            </aside>

            <!-- Right Side -->
            <main>
                <!-- Search Box -->
                <div class="search-box">
                    <input type="search" placeholder="Search Your Orders Here">
                    <button>Search Orders</button>
                </div>

                <div class="all-orders">
                    <!-- Orders -->
                    <div class="orders">
                        <div class="img-div">
                            <img src="images/macbook.webp" alt="iamge">
                        </div>
                        <div class="title">
                            <span>Macbook Air M2 2023</span>
                        </div>
                        <div class="price">
                            <span>₹1,12,999</span>
                        </div>
                        <div class="order-status">
                            <h6>Delivered</h6>
                        </div>
                    </div>
                    <!-- Orders -->
                    <div class="orders">
                        <div class="img-div">
                            <img src="images/iphone13.webp" alt="iamge">
                        </div>
                        <div class="title">
                            <span>Iphone 13 8GB/128GB</span>
                        </div>
                        <div class="price">
                            <span>₹76,999</span>
                        </div>
                        <div class="order-status">
                            <h6>Delivered</h6>
                        </div>
                    </div>
                    <!-- Orders -->
                    <div class="orders">
                        <div class="img-div">
                            <img src="images/scrub.webp" alt="iamge">
                        </div>
                        <div class="title">
                            <span>Muuchstac Face Scrub</span>
                        </div>
                        <div class="price">
                            <span>₹299</span>
                        </div>
                        <div class="order-status">
                            <h6>Delivered</h6>
                        </div>
                    </div>
                    <!-- Orders -->
                    <div class="orders">
                        <div class="img-div">
                            <img src="images/product16.webp" alt="iamge">
                        </div>
                        <div class="title">
                            <span>Bajaj Iron 1000W</span>
                        </div>
                        <div class="price">
                            <span>₹799</span>
                        </div>
                        <div class="order-status">
                            <h6>Delivered</h6>
                        </div>
                    </div>
                    <!-- Orders -->
                    <div class="orders">
                        <div class="img-div">
                            <img src="images/product13.webp" alt="iamge">
                        </div>
                        <div class="title">
                            <span>Lip Balm</span>
                        </div>
                        <div class="price">
                            <span>₹399</span>
                        </div>
                        <div class="order-status">
                            <h6>Delivered</h6>
                        </div>
                    </div>
                    <!-- Orders -->
                    <div class="orders">
                        <div class="img-div">
                            <img src="images/product5.jpeg" alt="iamge">
                        </div>
                        <div class="title">
                            <span>Logitech M8 Keyboard</span>
                        </div>
                        <div class="price">
                            <span>₹4,999</span>
                        </div>
                        <div class="order-status">
                            <h6>Delivered</h6>
                        </div>
                    </div>
                    <!-- Orders -->
                    <div class="orders">
                        <div class="img-div">
                            <img src="images/macmini.webp" alt="iamge">
                        </div>
                        <div class="title">
                            <span>Mac Mini with M2 Chip</span>
                        </div>
                        <div class="price">
                            <span>₹1,87,000</span>
                        </div>
                        <div class="order-status">
                            <h6>Delivered</h6>
                        </div>
                    </div>
                </div>
            </main>
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
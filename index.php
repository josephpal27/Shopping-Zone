<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Zone - Home</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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
          <a href="#"><i class="fa-solid fa-power-off"></i> <span>Logout</span></a>
        </div>
      </div>
      <!-- Navbar Ends Here -->


      <section> 
        <!-- Head Section Starts Here -->
        <div class="head">
            <div class="head-content" data-aos="zoom-in">
                <img src="images/head1.webp" alt="Image">
                <span>Smartphones</span>
            </div>
            <div class="head-content" data-aos="zoom-in">
                <img src="images/head3.webp" alt="Image">
                <span>Home & Furniture</span>
            </div>
            <div class="head-content" data-aos="zoom-in">
                <img src="images/head4.webp" alt="Image">
                <span>Electronics</span>
            </div>
            <div class="head-content" data-aos="zoom-in">
                <img src="images/head5.webp" alt="Image">
                <span>Fashion</span>
            </div>
            <div class="head-content" data-aos="zoom-in">
                <img src="images/head6.webp" alt="Image">
                <span>Toys & More</span>
            </div>
            <div class="head-content" data-aos="zoom-in">
                <img src="images/head7.webp" alt="Image">
                <span>Appliances</span>
            </div>
        </div>
        <!-- Head Section Ends Here -->


      <!-- Carousel Section Starts Here -->
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active slide-image-div">
            <img src="images/slide1.jpg" class="d-block w-100 slide-images" alt="Slide-Images">
          </div>
          <div class="carousel-item slide-image-div">
            <img src="images/slide6.jpg" class="d-block w-100 slide-images" alt="Slide-Images">
          </div>
          <div class="carousel-item slide-image-div">
            <img src="images/slide5.jpg" class="d-block w-100 slide-images" alt="Slide-Images">
          </div>
          <div class="carousel-item slide-image-div">
            <img src="images/slide7.jpg" class="d-block w-100 slide-images" alt="Slide-Images">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Carousel Section Ends Here -->


        <!-- Suggested For You Section Starts here -->
         <div class="suggested-products">
            <div>
                <h5>Suggested For You</h5>
            </div>
            <button class="slide-left"><i class="fa-solid fa-angle-left"></i></button>
            <button class="slide-right"><i class="fa-solid fa-angle-right"></i></button>
            <div class="product-row" data-aos="fade-right">
                <!-- Products -->
                <a href="product_details.php"> 
                  <div>
                      <img src="images/product1.webp" alt="Image">
                      <h6 class="title">Monitors</h6>
                      <p class="price">From ₹8948</p>
                  </div>
                </a>
                <!-- Products -->
                <a href="product_details.php"> 
                  <div>
                      <img src="images/product2.webp" alt="Image">
                      <h6 class="title">TWS</h6>
                      <p class="price">From ₹1500</p>
                  </div>
                </a>
                <!-- Products -->
                <a href="product_details.php"> 
                  <div>
                      <img src="images/product3.webp" alt="Image">
                      <h6 class="title">Smartatches</h6>
                      <p class="price">From ₹1999</p>
                  </div>
                </a>
                <!-- Products -->
                <a href="product_details.php"> 
                  <div>
                      <img src="images/iphone.jpeg" alt="Image">
                      <h6 class="title">Iphones</h5>
                      <p class="price">From ₹55999</p>
                  </div>
                </a>
                <!-- Products -->
                <a href="product_details.php"> 
                  <div>
                      <img src="images/product5.jpeg" alt="Image">
                      <h6 class="title">Keyboards</h6>
                      <p class="price">From ₹2500</p>
                  </div>
                </a>
                <!-- Products -->
                <a href="product_details.php"> 
                  <div>
                      <img src="images/product6.webp" alt="Image">
                      <h6 class="title">Printers</h6>
                      <p class="price">From ₹8900</p>
                  </div>
                </a>
                <!-- Products -->
                <a href="product_details.php"> 
                  <div>
                      <img src="images/product7.webp" alt="Image">
                      <h6 class="title">Routers</h6>
                      <p class="price">From ₹1298</p>
                  </div>
                </a>
                <!-- Products -->
                <a href="product_details.php"> 
                  <div>
                      <img src="images/product8.webp" alt="Image">
                      <h6 class="title">Cameras</h6>
                      <p class="price">From ₹68999</p>
                  </div>
                </a>
            </div>
         </div>
        <!-- Suggested For You Section Ends here -->


         <!-- All Products Section Starts here -->
        <div class="all-products">
            <div>
                <h5>All Products</h5>
            </div>
            <div class="all-products-row">
                <!-- Products -->
                <a href="product_details.php"> 
                  <div class="product">
                      <img src="images/perfume.webp" alt="Image">
                      <h6>Perfume</h6>
                      <span>₹999</span>
                  </div>
                </a>
                <!-- Products -->
                <a href="product_details.php"> 
                <div class="product">
                    <img src="images/laptop.webp" alt="Image">
                    <h6>Asus Vivobook 14</h6>
                    <span>₹76,999</span>
                </div>
                </a>
                <!-- Products -->
                <a href="product_details.php"> 
                <div class="product">
                    <img src="images/phone.webp" alt="Image">
                    <h6>Vivo Y18</h6>
                    <span>₹10,999</span>
                </div>
                </a>
                <!-- Products -->
                <a href="product_details.php"> 
                <div class="product">
                    <img src="images/product9.webp" alt="Image">
                    <h6>Realme Watch 3</h6>
                    <span>₹4,999</span>
                </div>
                </a>
                <!-- Products -->
                <a href="product_details.php"> 
                <div class="product">
                    <img src="images/product10.jpeg" alt="Image">
                    <h6>Face Mask</h6>
                    <span>₹799</span>
                </div>
                </a>
                <!-- Products -->
                <a href="product_details.php"> 
                <div class="product">
                    <img src="images/product11.webp" alt="Image">
                    <h6>Oneplus 9t</h6>
                    <span>₹38,999</span>
                </div>
                </a>
                <!-- Products -->
                <a href="product_details.php"> 
                <div class="product">
                    <img src="images/product12.webp" alt="Image">
                    <h6>Kurti</h6>
                    <span>₹599</span>
                </div>
                </a>
                <!-- Products -->
                <a href="product_details.php"> 
                <div class="product">
                    <img src="images/bottle.jpeg" alt="Image">
                    <h6>Water Bottles</h6>
                    <span>₹700</span>
                </div>
                </a>
            </div>
        </div>
         <!-- All Products Section Ends here -->
      </section>


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
    <script src="js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    
</body>
</html>
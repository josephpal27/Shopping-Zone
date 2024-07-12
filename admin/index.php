<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Zone - Admin Panel</title>
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <!-- Navbar Starts Here -->
    <div class="upper-layer"> </div>
    <nav id="navbar">
              <div class="nav-left">
                  <h4 class="logo">
                    <a href="../index.php"><i class="fa-solid fa-truck-fast"></i></a> 
                    <a href="index.php"><span>Admin Panel</span></a>
                  </h4>
                
                <form action="">
                  <input type="search" name="searchInput" placeholder="Search for Products, brands and more" id="searchInput" />
                  <div>
                    <a href="../search.php"><i class="fa-solid fa-magnifying-glass"></i></a>
                  </div>
                </form>
              </div>
              <div class="nav-right">
                <span id="user">
                    Admin
                <i class="fa-solid fa-caret-down" style="transition: rotate 0.2s ease"></i></span>
                <i class="fa-solid fa-bars"></i>
              </div>
    </nav>
    
      <div class="nav-menu">
            <div id="tooltip"><i class="fa-solid fa-caret-down"></i></div>
            <div class="menu">
              <a href="admin_profile.php"><i class="fa-solid fa-user"></i> <span>Profile</span></a>
            </div>
            <div class="menu">
              <a href="#"><i class="fa-solid fa-power-off"></i> <span>Logout</span></a>
            </div>
      </div>
      <!-- Navbar Ends Here -->


      <!-- Hero Section Starts Here -->
       <section>
        <div class="container-xl my-container">
          <aside>
            <h5>Admin Controls</h5>
            <div class="controls">
              <ul>
                <li class="active">Add Products</li>
                <li>Update Products</li>
                <li>Delete Products</li>
                <li>All Orders</li>
              </ul>
            </div>
          </aside>

          <main>
            <!-- Add Products Content -->
            <div class="add-products-content my-content-box" data-aos="fade">
              <h2>ADD PRODUCTS</h2>
              <div>
                <form action="" method="POST">
                  <div class="mt-3">
                      <label for="product_name" class="form-label">Product Name</label>
                      <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name"  required>
                  </div> 
                  <div class="mt-4">
                      <label for="product_price" class="form-label">Product Price</label>
                      <input type="number" class="form-control" id="product_price" name="product_price" placeholder="Enter Product Price" required>
                  </div>
                  <div class="mt-4">
                      <label for="product_des" class="form-label">Product Description</label>
                      <input type="text" class="form-control" id="product_des" name="product_description" placeholder="Enter Product Description">
                  </div>
                  <div class="mt-4" id="my-div">
                    <div>
                      <label for="product_qua" class="form-label">Product Quantity</label>
                      <input type="text" class="form-control" id="product_qua" name="product_quantity" placeholder="Enter Product Quantity" value="100" required>
                    </div>

                    <div>
                      <label for="product_category" class="form-label">Product Category</label>
                      <select name="product_category" id="product_category" class="form-select" required>
                        <option disabled selected>Select Category</option>
                        <option value="smartphones">Smartphones</option>
                        <option value="home">Home & Furniture</option>
                        <option value="electronics">Electronics</option>
                        <option value="fashion">Fashion</option>
                        <option value="toys">Toys</option>
                        <option value="appliances">Appliances</option>
                      </select>
                    </div>
                  </div>
                  <div class="mt-4">
                      <label for="my_file" class="form-label">Product Image</label>
                      <input type="file" class="form-control" name="my_file" id="my_file" required>
                  </div>
                  <div>
                    <button type="submit">Add Product</button>
                  </div>
                </form>
              </div>
            </div>

            <!-- Update Products Content -->
            <div class="update-products-content my-content-box">
              <h2>UPDATE PRODUCTS</h2>
              <div class="product-row">
                <!-- Products -->
                <div class="product">
                  <img src="../images/macbook.webp" alt="img">
                  <h5>Macbook M2</h5>
                  <h6>₹1,12,999</h6>
                  <button id="update-btn">UPDATE</button>
                </div>
                <!-- Products -->
                <div class="product">
                  <img src="../images/iphone.jpeg" alt="img">
                  <h5>iPhone13</h5>
                  <h6>₹67,000</h6>
                  <button id="update-btn">UPDATE</button>
                </div>
                <!-- Products -->
                <div class="product">
                  <img src="../images/headphone1.webp" alt="img">
                  <h5>Headphone</h5>
                  <h6>₹2,999</h6>
                  <button id="update-btn">UPDATE</button>
                </div>
                <!-- Products -->
                <div class="product">
                  <img src="../images/tv2.jpg" alt="img">
                  <h5>Panasonic TV</h5>
                  <h6>₹32,999</h6>
                  <button id="update-btn">UPDATE</button>
                </div>
              </div>
            </div>

            <!-- Delete Products Content -->
            <div class="delete-products-content my-content-box">
              <h2>DELETE PRODUCTS</h2>
              <div class="product-row">
                <!-- Products -->
                <div class="product">
                  <img src="../images/macbook.webp" alt="img">
                  <h5>Macbook M2</h5>
                  <h6>₹1,12,999</h6>
                  <button id="delete-btn">DELETE</button>
                </div>
                <!-- Products -->
                <div class="product">
                  <img src="../images/iphone.jpeg" alt="img">
                  <h5>iPhone13</h5>
                  <h6>₹67,000</h6>
                  <button id="delete-btn">DELETE</button>
                </div>
                <!-- Products -->
                <div class="product">
                  <img src="../images/headphone1.webp" alt="img">
                  <h5>Headphone</h5>
                  <h6>₹2,999</h6>
                  <button id="delete-btn">DELETE</button>
                </div>
                <!-- Products -->
                <div class="product">
                  <img src="../images/tv2.jpg" alt="img">
                  <h5>Panasonic TV</h5>
                  <h6>₹32,999</h6>
                  <button id="delete-btn">DELETE</button>
                </div>
              </div>
            </div>

            <!-- All Orders Content -->
            <div class="all-orders-content my-content-box">
              <h2>ALL ORDERS</h2>
              <!-- Order Row -->
              <div class="order-row">
                <div class="left">
                  <img src="../images/macbook.webp" alt="Image">
                  <div class="details">
                    <h4>Macbook M2</h4>
                    <h5>₹1,12,999</h5>
                  </div>
                </div>
                <div class="right">
                  <h5>Delivered To</h5>
                  <span>Username</span>
                </div>
              </div>
              <!-- Order Row -->
              <div class="order-row">
                <div class="left">
                  <img src="../images/tv.png" alt="Image">
                  <div class="details">
                    <h4>Panasonic 32" Smart TV</h4>
                    <h5>₹42,000</h5>
                  </div>
                </div>
                <div class="right">
                  <h5>Delivered To</h5>
                  <span>Username</span>
                </div>
              </div>
              <!-- Order Row -->
              <div class="order-row">
                <div class="left">
                  <img src="../images/oneplus.png" alt="Image">
                  <div class="details">
                    <h4>Oneplus Nord 2</h4>
                    <h5>₹39,999</h5>
                  </div>
                </div>
                <div class="right">
                  <h5>Delivered To</h5>
                  <span>Username</span>
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



    <!-- Update Modal -->
    <section class="update-modal">
      <div class="container-lg modal-container">
        <i class="fa-solid fa-xmark"></i>
        <div class="mt-4">
          <label for="product_name" class="form-label">Product Name</label>
          <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name"  required style="border: 1px solid blueviolet;">
        </div>
        <div class="mt-4">
          <label for="product_price" class="form-label">Product Price</label>
          <input type="number" class="form-control" id="product_price" name="product_price" placeholder="Enter Product Price" required style="border: 1px solid blueviolet;">
        </div>
        <div class="mt-4">
          <label for="product_des" class="form-label">Product Description</label>
          <input type="text" class="form-control" id="product_des" name="product_description" placeholder="Enter Product Description" style="border: 1px solid blueviolet;">
        </div>
        <div class="mt-4" id="my-div-2">
          <div>
            <label for="product_qua" class="form-label">Product Quantity</label>
            <input type="text" class="form-control" id="product_qua" name="product_quantity" placeholder="Enter Product Quantity" required style="border: 1px solid blueviolet;">
          </div>

          <div>
            <label for="product_category" class="form-label">Product Category</label>
            <select name="product_category" id="product_category" class="form-select" required style="border: 1px solid blueviolet;">
              <option disabled selected>Select Category</option>
              <option value="smartphones">Smartphones</option>
              <option value="home">Home & Furniture</option>
              <option value="electronics">Electronics</option>
              <option value="fashion">Fashion</option>
              <option value="toys">Toys</option>
              <option value="appliances">Appliances</option>
            </select>
          </div>
        </div>
        <div class="mt-4">
            <label for="my_file" class="form-label">Product Image</label>
            <input type="file" class="form-control" name="my_file" id="my_file" required style="border: 1px solid blueviolet;">
        </div>
        <div>
          <button id="modal-update-btn">UPDATE</button>
        </div>
      </div>
    </section>


    
    
    <script src="js/nav.js"></script>
    <script src="js/admin.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
</html>
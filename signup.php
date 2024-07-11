<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Zone - SignUp</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <section>
        <div class="container-xl my-container">
            <div class="head">
                <h5><span>S</span>hopping Zone</h5>
                <span>Already an User? <a href="login.php">Login</a></span>
            </div>
            <main>
                <div class="img-div">
                    <img src="images/signup-img.png" alt="Image">
                </div>
                <div class="details">
                    <h5>Welcome New User!</h5>
                    <p>Sign Up to Continue</p>

                    <form action="" method="post">
                        <input type="text" name="username" placeholder="Username" required>
                        <input type="password" name="pass" placeholder="Password" required>
                        <input type="password" name="c_pass" placeholder="Confirm Password" required>
                        <div>
                            <button>Sign Up</button>
                            <a href="">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </main>
        </div>

        <div class="back"> </div>
    </section>
</body>
</html>
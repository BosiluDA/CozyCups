<?php
session_start();

// Check if the user is logged in
$isLoggedIn = isset($_SESSION["user_name"]);
$userName = $isLoggedIn ? $_SESSION["user_name"] : '';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cozy Cups</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="SliderStyles2.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">🍵COZY CUPS</div>
            <ul>
                
                <li><a href="home.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

            <div>
                <button class="cartbttn" style="padding-top: 1px;">
                    <a href="cart.php"><img src="images/cart-shopping-svgrepo-com.svg" class="searchbttnicon"></a>
                </button>
            </div>

            <div>
                <?php if ($isLoggedIn): ?>
                    <span style="margin-right: 10px;">Welcome, <?php echo htmlspecialchars($userName); ?>!</span>
                    <a href="../logout.php" style="transition: 0.25s; border: none; text-decoration: none; color: black; padding-bottom: 3px;">Log Out</a>
                <?php else: ?>
                    <a href="../signup.php" style="transition: 0.25s; border: none; text-decoration: none; color: black; padding-bottom: 3px;">Sign Up</a>
                    <br>
                    <a href="../index.php" style="transition: 0.25s; border: none; text-decoration: none; color: black; padding-bottom: 3px;">Log In</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <section class="homepage">
        <div class="homepagediv">
            <div class="homepagetxt">
                <?php if ($isLoggedIn): ?>
                    At Cozy Cups,<br> Every sip is personal, <?php echo htmlspecialchars($userName); ?>.<br> Make every moment cozy,<br> with the perfect mug!
                <?php else: ?>
                    At Cozy Cups,<br> Every sip is personal.<br> Make every moment cozy,<br> with the perfect mug!
                <?php endif; ?>
            </div>
            <div>
                <button class="homepagebtn"><a class="homepagebtna" href="shop.php">Get yours now!</a></button>
            </div>
        </div>
    </section>

    <div class="homepagetxt" style="font-size: 3rem; text-align: center;">Start your day with a cup full of cozy.</div>

    <!-- Product Section -->
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); column-gap: 10px; row-gap: 20px;margin-top: 20px;margin-left:100px;margin-right:none;">
            <?php
            $products = [
                ['name' => 'Hiking Mug', 'price' => '500', 'image' => 'images/v20.jpg'],
                
                ['name' => 'Planet B Mug', 'price' => '500', 'image' => 'images/v222.jpg'],
                
                ['name' => 'Motivational Mug', 'price' => '480', 'image' => 'images/v24.jpg'],
                ['name' => 'Galaxy Mug', 'price' => '700', 'image' => 'images/v25.jpg'],
            ];

            foreach ($products as $product) {
                echo "
                <div>
                    <div style='height: 200px;'><img src='{$product['image']}' alt='{$product['name']}'></div>
                    <p class='mugtype'>{$product['name']}</p>
                    <div>
                        From Rs.{$product['price']}
                        
                    </div>
                </div>";
            }
            ?>
        </div>

    <div class="homepagetxt" style="font-size: 50px; padding:none;">
        Where every mug is designed to brighten your day, one cup at a time.
    </div>

    <section class="homepage2">
        <div class="homepagediv">
            <div class="homepagetxt2">
                At Cozy Cups, every sip tells a story.<br>
                Whether you're starting your day with a bold brew or<br>
                winding down with a comforting tea,<br>
                our customizable mugs are crafted to match your style 
                and moments.<br>
                Create a mug that's as unique as you are and make every cup count.<br>
                Cozy up today!
            </div>
            <div>
                <button class="homepagebtn"><a class="homepagebtna" href="services.php">Learn more...</a></button>
            </div>
        </div>
    </section>

    <footer>
        <br>
        &copy; 2024 COZY CUPS. All Rights Reserved.
    </footer>

    <!-- Footer Section -->
    <div style="background-color: rgb(156, 58, 28); height: 350px; width: 100%;">
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; column-gap: 10px; row-gap: 20px; margin-bottom: 30px;">
            <div>
                <h5>Information</h5>
                <a class="footbar" href="about.php">About us</a><br>
                <a class="footbar" href="about.php">Our story</a><br>
                <a class="footbar" href="about.php">Sustainability Commitment</a>
            </div>

            <div>
                <h5>Customer Service</h5>
                <a class="footbar" href="contact.php">Contact Us</a><br>
                <a class="footbar" href="">Email: support@cozycups.com</a><br>
                <a class="footbar" href="contact.php">FAQ's</a><br>
                <a class="footbar" href="services.php">Return Policy</a>
            </div>

            <div>
                <h5>Follow us</h5>
                <a class="footbar" href="contact.php">Facebook</a><br>
                <a class="footbar" href="contact.php">Threads</a><br>
                <a class="footbar" href="contact.php">X</a><br>
                <a class="footbar" href="services.php">Instagram</a>
            </div>

            <div>
                <h5>Legal Information</h5>
                <a class="footbar" href="privacy.php">Terms & Conditions</a><br>
                <a class="footbar" href="privacy.php">Privacy Policy</a><br>
                <a class="footbar" href="privacy.php">Cookie Policy</a><br>
            </div>

            <div>
                <h5>Accessibility</h5>
                <a class="footbar" href="contact.php">Accessibility Policy</a><br>
            </div>

            <div class="footerimgs">
                <img src="footerimgs/amex.png">
                <img src="footerimgs/applepay.jpg">
                <img src="footerimgs/mastercard.jpg">
                <img src="footerimgs/visa.png">
            </div>
        </div>
        <a href="services.php" class="cta-button">Explore Services</a>
    </div>

    

    <script src="app.js"></script>
</body>
</html>

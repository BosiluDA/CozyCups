<?php
session_start(); // Start a session to check if user is logged in
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pour warmth into every sip with Cozy Cups</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="user.css">
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
                <?php if (isset($_SESSION["user_id"])): ?>
                    <a href="../CozyCups/user_profile_manager.php">
    <button class="user-button">
        <img class="user" src="../CozyCups/images/user.png" alt="User Profile">
    </button>
</a>

                <?php else: ?>
                    
                    <a href="../signup.php"  style="transition: 0.25s; border: none; text-decoration: none; color: black; padding-bottom: 3px;">Sign Up</a>
                    <br><a href="../index.php"  style="transition: 0.25s; border: none; text-decoration: none; color: black; padding-bottom: 3px;">Log in</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <section id="about" class="about">
        <h2>About COZY CUPS</h2>
        <p>“COZY CUPS” is an online mug shop. This project is designed to develop an e-commerce platform where customers can customize mugs according to their preferences. Customers can browse, add items to their cart, track orders, and manage profiles. The admin panel will allow shop owners to manage products, customers, and orders.</p>
        
        <p>The idea for Cozy Cups was born out of a heartfelt moment in Bosilu's life. During a rainy afternoon, Bosilu found himself sipping tea from his favorite mug, a personalized gift from a close friend. It struck him how a simple, customized item could evoke cherished memories. This inspired the creation of a platform where people can design mugs that feel uniquely theirs.</p>
        
        <p>The vision for Cozy Cups is to turn ordinary mugs into extraordinary keepsakes while making the process simple, fun, and accessible for everyone.</p>

        <div class="slideshow-container">
            <div class="socialmedia">
                <div class="mySlides fade">
                    <img src="socialmediaicons/facebook.png">
                </div>

                <div class="mySlides fade">
                    <img src="socialmediaicons/instagram.png">
                </div>

                <div class="mySlides fade">
                    <img src="socialmediaicons/threads.avif">
                </div>

                <div class="mySlides fade">
                    <img src="socialmediaicons/xicon.jpg">
                </div>
                <div class="text">@OfficialCozyCups</div>
            </div>
        </div>
    </section>

    <br>

    <footer>
        <br><br><br>
        &copy; 2024 COZY CUPS. All Rights Reserved.
    </footer>

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

    <script>
        let slideIndex = 0;
        showSlides(); 
        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }
    </script>

    
</body>
</html>
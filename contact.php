<?php
session_start(); // Start a session to check if the user is logged in

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // handle the form submission
    
    mail('support@cozycups.com', 'Contact Form Message', $message, 'From: ' . $email);
    
    // Redirect after submission 
    header('Location: contact.php?status=success');
    exit();
}
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
    <div class="background" style="text-align: center;">
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

        <section id="contact">
            <h2>Contact Cozy Cups</h2>
            <div class="wrapper">
                <form action="contact.php" method="post">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <br><br>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <br><br>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <br><br>
                    <button type="submit">Send Message</button>
                </form>
            </div>

            <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
                <p style="color: green; font-weight: bold;">Your message has been sent successfully!</p>
            <?php endif; ?>

            <p style="color: rgb(0, 0, 0); font-weight: bold;">
                Help Center: Provide a help center link or a frequently asked question section where customers can find more information about the products, placing orders, and how to manage their accounts.
                Live Chat and Contact Information: Provide information regarding customer support-online chat, email address, or phone number where customers can make inquiries.
                Example content:
                "Need help with your order? Have questions about our products? Contact our friendly customer service team via live chat, or email us at support@cozycups.com."
            </p>
            <br>
            <img style="border-radius: 105px; border-style: solid;" src="socialmediaicons/customericon.png">
        </section>
    </div>

    <footer>
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

    <script src="app.js"></script>
</body>
</html>

<?php
session_start(); // Start a session to check if the user is logged in (if needed)
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
                    
                    <a href="signup.php"  style="transition: 0.25s; border: none; text-decoration: none; color: black; padding-bottom: 3px;">Sign Up</a>
                    <br><a href="../index.php"  style="transition: 0.25s; border: none; text-decoration: none; color: black; padding-bottom: 3px;">Log in</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <div class="home" style="text-align:center;">
        <h4>Privacy Policy</h4>
        <br>
        Welcome to Cozy Cups! Your privacy is very important to us, and we are committed to protecting your personal information. <br>
        This Privacy Policy explains how we collect, use, and safeguard your information when you visit our website or use our services.
        <br>
        <h2> 1. Information We Collect</h2><br>
        We collect the following types of information:<br>
        
        Personal Information: Your name, email address, phone number, and shipping/billing addresses when you create an account, place an order, or sign up for our newsletter.<br>
        Payment Information: Details required to process your orders securely, such as credit card details (processed through secure third-party providers).<br>
        Usage Data: Information about your interactions with our website, such as pages viewed, items added to your cart, and clicks.<br>
        Cookies and Tracking Technologies: Data collected through cookies to improve your browsing experience.<br><br>
        
        <h2>2. How We Use Your Information</h2><br>
        We use your information for the following purposes:<br>
        
        To process and fulfill your orders.<br>
        To communicate with you about your orders, account, or promotional offers.<br>
        To improve our website, services, and user experience.<br>
        To comply with legal requirements.<br>
        
        <h2>3. Sharing Your Information</h2><br>
        We do not sell or rent your personal information. However, we may share your information with:<br>
        
        Service Providers: For payment processing, shipping, and customer support.<br>
        Legal Authorities: When required by law to protect our rights or comply with legal obligations.<br>
        Marketing Tools: Aggregated and anonymized data may be used for analytics or advertising.<br>
        
        <h2>4. Cookies and Tracking Technologies</h2><br>
        Cozy Cups uses cookies to:<br>
        
        Remember your preferences and shopping cart items.<br>
        Provide personalized product recommendations.<br>
        Track website analytics to improve our services.<br>
        You can manage your cookie preferences through your browser settings.<br>
        
        <h2>5. How We Protect Your Information</h2><br>
        We use industry-standard measures to protect your data, including:<br>
        
        Secure Socket Layer (SSL) encryption for transactions.<br>
        Restricted access to your information.<br>
        Regular monitoring of our systems for vulnerabilities.<br>
        
        <h2>6. Your Privacy Choices</h2><br>
        You have control over your personal data:<br>
        
        Access and Correction: View and update your account details at any time.<br>
        Opt-Out: Unsubscribe from promotional emails by clicking the “unsubscribe” link.<br>
        Data Deletion: Request the deletion of your account and associated data by contacting us.<br>
        
        <h2>7. International Users</h2><br>
        If you are accessing Cozy Cups from outside [Insert Country], please note that your information may be transferred and stored in our servers located in [Insert Country].
        <br>
        
        <h2>8. Children’s Privacy</h2><br>
        Cozy Cups is not intended for children under 13. We do not knowingly collect personal information from children.<br>
        
        <h2>9. Changes to This Policy</h2><br>
        We may update this Privacy Policy occasionally to reflect changes in our practices. Significant changes will be communicated via email or a notice on our website.
        <br>
        
        <h2>10. Contact Us</h2><br>
        If you have any questions or concerns about this Privacy Policy, please reach out to us:<br>
        
        Email:<a style="text-decoration: underline;color: blue;"> privacy@cozycups.com</a><br>
        
        This policy ensures that Cozy Cups maintains transparency and compliance while prioritizing user trust and security.<br>
    </div>

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

    <script src="app.js"></script>
</body>
</html>

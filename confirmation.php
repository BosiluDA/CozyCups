<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmed - Cozy Cups</title>
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
        </nav>
    </header>
    <main style="text-align: center; padding: 60px 20px;">
        <h1>Thank you for your order!</h1>
        <p style="font-size: 1.2rem;">Your order has been placed successfully. We'll get your mugs to you soon.</p>
        <p><a href="shop.php" style="color: rgb(156, 58, 28); font-weight: bold;">Continue shopping</a> or <a href="home.php" style="color: rgb(156, 58, 28); font-weight: bold;">return home</a></p>
    </main>
    <footer>
        <p>&copy; 2024 COZY CUPS. All Rights Reserved.</p>
    </footer>
</body>
</html>

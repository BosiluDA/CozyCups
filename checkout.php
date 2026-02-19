<?php
session_start();

// Ensure the cart is not empty
if (empty($_SESSION['cart'])) {
    header("Location: cart.php");
    exit();
}

// Fetch totalprice from cart
$cart = $_SESSION['cart'];
$totalPrice = 0;

// Calculate the total price
foreach ($cart as $details) {
    if (is_array($details) && isset($details['price'], $details['quantity'])) {
        $totalPrice += $details['price'] * $details['quantity'];
    }
}

// Process payment details if submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cardNumber = $_POST['card_number'];
    $expiryDate = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];

    // Validate payment details
    if (!empty($cardNumber) && !empty($expiryDate) && !empty($cvv)) {
        
        $paymentSuccessful = true; 

        if ($paymentSuccessful) {
            
            unset($_SESSION['cart']);
            header("Location: confirmation.php");
            exit();
        } else {
            $error = "Payment failed. Please try again.";
        }
    } else {
        $error = "Please fill in all payment details.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Cozy Cups</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        .checkout-wrapper {
            max-width: 600px;
            margin: 0 auto;
        }
        .checkout-wrapper p {
            font-size: 18px;
        }
        .checkout-wrapper form {
            margin-top: 20px;
        }
        input, button {
            display: block;
            margin: 10px 0;
            padding: 10px;
            width: 100%;
            max-width: 400px;
            font-size: 16px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
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

    <main>
        <div class="checkout-wrapper">
            <h1>Checkout</h1>
            <p>Total Price: <strong>Rs. <?= number_format($totalPrice, 2); ?></strong></p>

            <?php if (isset($error)): ?>
                <p class="error"><?= htmlspecialchars($error); ?></p>
            <?php endif; ?>

            <!-- Payment Form -->
            <form method="POST" action="checkout.php">
                <label for="card-number">Card Number:</label>
                <input type="text" id="card-number" name="card_number" maxlength="16" placeholder="Enter your card number" required>

                <label for="expiry-date">Expiry Date:</label>
                <input type="month" id="expiry-date" name="expiry_date" required>

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" maxlength="4" placeholder="Enter CVV" required>

                <button type="submit">Pay Now</button>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 COZY CUPS. All Rights Reserved.</p>
    </footer>
</body>
</html>

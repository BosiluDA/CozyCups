<?php
session_start();

// Initialize cart and liked items (session only, no DB)
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if (!isset($_SESSION['liked'])) {
    $_SESSION['liked'] = [];
}

// Handle item removal from cart
if (isset($_POST['remove_cart_item'])) {
    $product = $_POST['product'];
    if (isset($_SESSION['cart'][$product])) {
        unset($_SESSION['cart'][$product]);
    }
}

// Handle item removal from like items
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['remove_liked_item'])) {
        if (isset($_POST['liked_index']) && array_key_exists($_POST['liked_index'], $_SESSION['liked'])) {
            $likedIndex = $_POST['liked_index']; 
            unset($_SESSION['liked'][$likedIndex]); 
            $_SESSION['liked'] = array_values($_SESSION['liked']); 
        }
    }
}



// Update quantity in the cart
if (isset($_POST['update_quantity'])) {
    $product = $_POST['product'];
    $quantity = intval($_POST['quantity']);
    if (isset($_SESSION['cart'][$product]) && $quantity > 0) {
        $_SESSION['cart'][$product]['quantity'] = $quantity;
    }
}

// Calculate total price
$totalPrice = 0;
foreach ($_SESSION['cart'] as $details) {
    if (is_array($details) && isset($details['price'], $details['quantity'])) {
        $totalPrice += $details['price'] * $details['quantity'];
    }
}

// Display HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Cozy Cups</title>
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
                <button class="cartbttn"><a href="cart.php"><img src="images/cart-shopping-svgrepo-com.svg" class="searchbttnicon"></a></button>
            </div>
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

    <main>
        <section class="cart-wrapper">
            <h2>Your Cart</h2>
            <?php if (!empty($_SESSION['cart'])): ?>
                <?php foreach ($_SESSION['cart'] as $product => $details): ?>
                    <div class="cart-item">
                        <p>Product: <?= htmlspecialchars($product); ?></p>
                        <p>
                            Price: 
                            Rs. <?= htmlspecialchars(is_array($details) && isset($details['price']) ? $details['price'] : 'Not available'); ?>
                        </p>
                        <form method="POST" class="quantity-form">
                            <label for="quantity">Quantity:</label>
                            <input type="number" name="quantity" min="1" value="<?= htmlspecialchars(is_array($details) && isset($details['quantity']) ? $details['quantity'] : 1); ?>">
                            <input type="hidden" name="product" value="<?= htmlspecialchars($product); ?>">
                            <button type="submit" name="update_quantity">Update</button>
                        </form>
                        <p>
                            Subtotal: Rs. 
                            <?= htmlspecialchars(is_array($details) && isset($details['price'], $details['quantity']) ? $details['price'] * $details['quantity'] : 'Not available'); ?>
                        </p>
                        <form method="POST">
                            <input type="hidden" name="product" value="<?= htmlspecialchars($product); ?>">
                            <button type="submit" name="remove_cart_item" class="removebttn">
                                <img src="images/remove-svgrepo-com.svg" class="searchbttnicon"> Remove
                            </button>
                        </form>
                    </div>
                <?php endforeach; ?>
                <h3>Total Price: Rs. <?= $totalPrice; ?></h3>
                <a href="checkout.php" class="buy-now" style="transition: 0.25s; border: none; text-decoration: none; color: black; padding-bottom: 3px;">Buy Now</a>
            <?php else: ?>
                <p>Your cart is empty.</p>
            <?php endif; ?>
        </section>

        
<section class="liked-wrapper">
    <h2>Liked Items</h2>
    <?php if (!empty($_SESSION['liked'])): ?>
        <?php foreach ($_SESSION['liked'] as $likedIndex => $likedProduct): ?>
            <div class="liked-item">
                <p>Product: <?= htmlspecialchars($likedProduct); ?></p>
                <form method="POST">
                    <!-- Pass the index of the liked product -->
                    <input type="hidden" name="liked_index" value="<?= $likedIndex; ?>">
                    <button type="submit" name="remove_liked_item" class="removebttn">
                        Remove
                    </button>
                </form>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>You have no liked items.</p>
    <?php endif; ?>
</section>



    </main>

    <footer>
        <p>&copy; 2024 COZY CUPS. All Rights Reserved.</p>
    </footer>
</body>
</html>

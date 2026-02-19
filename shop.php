<?php
session_start();

require_once "../db_connect.php"; 

// Initialize cart and liked items if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (!isset($_SESSION['liked'])) {
    $_SESSION['liked'] = [];
}

// Handle Add to Cart
if (isset($_POST['add_to_cart'])) {
    $product = $_POST['product'];
    $price = $_POST['price'];
    $quantity = 1; // Default to 1 item

    // Check if the product is already in the cart
    if (isset($_SESSION['cart'][$product])) {
        $_SESSION['cart'][$product]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$product] = [
            'price' => $price,
            'quantity' => $quantity,
        ];
    }

    header('Location: shop.php');
    exit();
}

// Handle Like
if (isset($_POST['like_product'])) {
    $product = $_POST['product'];
    $price = $_POST['price'];
    if (!in_array($product, $_SESSION['liked'])) {
        $_SESSION['liked'][] = $product;
    }

    header('Location: shop.php');
    exit();
}


// Fetch all available products
$stmt = $conn->prepare("SELECT * FROM products WHERE is_available = 1");
$stmt->execute();
$result = $stmt->get_result();

// Prepare products to display
$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}


                

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Cozy Cups</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <div class="home"> 
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

        <div class="navbar">
            <a class="navbarcolor" href="#Funny">Funny</a>
            <a class="navbarcolor" href="#Christmas">Christmas</a>
            <a class="navbarcolor" href="#Love">Love</a>
            <a class="navbarcolor" href="#Birthday">Birthday</a>
        </div>

        <section id="Shop" class="Shop1">
    <h1>Welcome to COZY CUPS!</h1>
    <p>Where every mug is designed to brighten your day, one cup at a time.</p>

    <!-- Funny Mugs -->
    <div id="Funny" class="product-category">
        <h2>Funny Mugs</h2>
        <div class="product-grid" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
            <div class="product">
                <img src="images/v20.jpg" alt="Hiking Mug">
                <p class="product-name">Hiking Mug</p>
                <p class="product-price">Rs. 500.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Hiking Mug">
                    <input type="hidden" name="price" value="500">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>
            <div class="product">
                <img src="images/v21.jpg" alt="Pizza Mug">
                <p class="product-name">Pizza Mug</p>
                <p class="product-price">Rs. 560.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Pizza Mug">
                    <input type="hidden" name="price" value="560">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>
            <div class="product">
                <img src="images/v23.jpg" alt="Funny Alien Mugs">
                <p class="product-name">Funny Alien Mugs</p>
                <p class="product-price">Rs. 580.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Funny Alien Mugs">
                    <input type="hidden" name="price" value="580">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>
            <div class="product">
                <img src="images/v26.jpg" alt="Banana cat Mugs">
                <p class="product-name">Banana cat Mugs</p>
                <p class="product-price">Rs. 550.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Banana cat Mugs">
                    <input type="hidden" name="price" value="550">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>

            <div class="product">
                <img src="images/v222.jpg" alt="Planet B Mugs">
                <p class="product-name">Planet B Mugs</p>
                <p class="product-price">Rs. 500.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Planet B Mugs">
                    <input type="hidden" name="price" value="500">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>
            <div class="product">
                <img src="images/v27.jpg" alt="Just Chillin Mugs">
                <p class="product-name">Just Chillin Mugs</p>
                <p class="product-price">Rs. 550.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Just Chillin Mugs">
                    <input type="hidden" name="price" value="550">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>
            
        </div>
    </div>

    <!-- Christmas Mugs -->
    <div id="Christmas" class="product-category">
        <h2 style="margin-top: 70px;">Christmas Mugs</h2>
        <div class="product-grid" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
            <div class="product">
                <img src="images/v1.jpg" alt="Santa Favourites Mug">
                <p class="product-name">Santa Favourites Mug</p>
                <p class="product-price">Rs. 780.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Santa Favourites Mug">
                    <input type="hidden" name="price" value="780">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>

            <div class="product">
                <img src="images/v7.jpg" alt="Pizza Mug">
                <p class="product-name">Pizza Mug</p>
                <p class="product-price">Rs. 560.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Pizza Mug">
                    <input type="hidden" name="price" value="560">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>

            <div class="product">
                <img src="images/v8.jpg" alt="Pizza Mug">
                <p class="product-name">Pizza Mug</p>
                <p class="product-price">Rs. 560.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Pizza Mug">
                    <input type="hidden" name="price" value="560">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>

            <div class="product">
                <img src="images/v9.jpg" alt="Pizza Mug">
                <p class="product-name">Pizza Mug</p>
                <p class="product-price">Rs. 560.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Pizza Mug">
                    <input type="hidden" name="price" value="560">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>

            <div class="product">
                <img src="images/v24.jpg" alt="Pizza Mug">
                <p class="product-name">Pizza Mug</p>
                <p class="product-price">Rs. 560.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Pizza Mug">
                    <input type="hidden" name="price" value="560">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>

            <div class="product">
                <img src="images/v25.jpg" alt="Pizza Mug">
                <p class="product-name">Pizza Mug</p>
                <p class="product-price">Rs. 560.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Pizza Mug">
                    <input type="hidden" name="price" value="560">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>

            
        </div>
    </div>

    <div id="Love" class="product-category">
        <h2 style="margin-top: 70px;">Love Mugs</h2>
        <div class="product-grid" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
            <div class="product">
                <img src="images/v16.jpg" alt="Love Thanks Mugs">
                <p class="product-name">Love Thanks Mugs</p>
                <p class="product-price">Rs.780.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Love Thanks Mugs">
                    <input type="hidden" name="price" value="780">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>
            <div class="product">
                <img src="images/v17.jpg" alt="Pizza Mug">
                <p class="product-name">Love Mugs</p>
                <p class="product-price">Rs. 580.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Love Mugs">
                    <input type="hidden" name="price" value="580">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>
            <div class="product">
                <img src="images/v18.jpg" alt="Love Latte Mugs">
                <p class="product-name">Love Latte Mugs</p>
                <p class="product-price">Rs. 780.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Love Latte Mugs">
                    <input type="hidden" name="price" value="780">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>
            <div class="product">
                <img src="images/v19.jpg" alt="I love u Mugs">
                <p class="product-name">I love u Mugs</p>
                <p class="product-price">Rs. 660.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="I love u Mugs">
                    <input type="hidden" name="price" value="660">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>

            <div class="product">
                <img src="images/v28.jpg" alt="White Hearts Mugs">
                <p class="product-name">White Hearts Mugs</p>
                <p class="product-price">Rs. 780.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="White Hearts Mugs">
                    <input type="hidden" name="price" value="780">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>
            <div class="product">
                <img src="images/v29.jpg" alt="So very Loved Mugs">
                <p class="product-name">So very Loved Mugs</p>
                <p class="product-price">Rs. 780.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="So very Loved Mugs">
                    <input type="hidden" name="price" value="780">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>
            
        </div>
    </div>

    <div id="Birthday" class="product-category">
        <h2 style="margin-top: 70px;">Birthday Mugs</h2>
        <div class="product-grid" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
            <div class="product">
                <img src="images/v12.jpg" alt="Birthday Babe Mugs">
                <p class="product-name">Birthday Babe Mugs</p>
                <p class="product-price">Rs.680.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Birthday Babe Mugs">
                    <input type="hidden" name="price" value="680">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>
            <div class="product">
                <img src="images/v13.jpg" alt="It's my birthday Mugs">
                <p class="product-name">It's my birthday Mugs</p>
                <p class="product-price">Rs. 880.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="It's my birthday Mugs">
                    <input type="hidden" name="price" value="880">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>
            <div class="product">
                <img src="images/v14.jpg" alt="My birthday rainbow Mugs">
                <p class="product-name">My birthday rainbow Mugs</p>
                <p class="product-price">Rs. 780.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="My birthday rainbow Mugs">
                    <input type="hidden" name="price" value="780">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>
            <div class="product">
                <img src="images/v33.jpg" alt="Happy Birthday Balloons Mugs">
                <p class="product-name">Happy Birthday Balloons Mugs</p>
                <p class="product-price">Rs. 680.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Happy Birthday Balloons Mugs">
                    <input type="hidden" name="price" value="680">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>

            <div class="product">
                <img src="images/v34.jpg" alt="Happy Birthday Mugs">
                <p class="product-name">Happy Birthday Mugs</p>
                <p class="product-price">Rs. 680.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Happy Birthday Mugs">
                    <input type="hidden" name="price" value="680">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>
            <div class="product">
                <img src="images/v35.jpg" alt="Happybirthday Mugs">
                <p class="product-name">Happybirthday Mugs</p>
                <p class="product-price">Rs. 680.00</p>
                <form method="POST" action="shop.php">
                    <input type="hidden" name="product" value="Happybirthday Mugs">
                    <input type="hidden" name="price" value="680">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                    <button type="submit" name="like_product">Like</button>
                </form>
            </div>
            
        </div>
    </div>


    <div class="product-grid" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
    <?php foreach ($products as $product): ?>
            <div class="product-card">
                <img src="<?= htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" style="width: 200px;">
                <h3><?= htmlspecialchars($product['name']); ?></h3>
                <p><?= htmlspecialchars($product['description']); ?></p>
                <p>Price: Rs. <?= htmlspecialchars($product['price']); ?></p>
                <form method="post" action="add_to_cart.php">
                    <input type="hidden" name="product_id" value="<?= $product['id']; ?>">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
    </div>

    
</section>

    </div>
    <div style="background-color: rgb(156, 58, 28); height: 350px; width: 100%;margin-top:30px;">
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
</body>
</html>

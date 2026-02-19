<?php
session_start();

// Ensure the user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: ../index.php");
    exit();
}

require_once "../db_connect.php";

// Fetch current user details
$user_id = $_SESSION["user_id"];
$stmt = $conn->prepare("SELECT name, email, role FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Handle profile updates
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);

    if (!empty($name) && !empty($email)) {
        $stmt = $conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssi", $name, $email, $user_id);
        if ($stmt->execute()) {
            $message = "Profile updated successfully!";
            $_SESSION["user_name"] = $name; // Update session with new name
        } else {
            $message = "Error updating profile: " . $conn->error;
        }
    } else {
        $message = "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        input {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
        }
        .updatebttn{
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
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
        .message {
            color: green;
            font-weight: bold;
        }
    </style>
    <link rel="stylesheet" href="navbar.css">
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
                <?php if ($user["role"] === "shop_owner"): ?>
                    <a href="../shop_owner_dashboard.php">
                        <button class="shop-owner-button" style="text-decoration: none;">Shop Owner Dashboard</button>
                    </a>
                <?php endif; ?>

                <a href="../CozyCups/user_profile_manager.php">
                    <button class="user-button">
                        <img class="user" src="../CozyCups/images/user.png" alt="User Profile">
                    </button>
                </a>
            <?php else: ?>
                <a href="../signup.php" style="transition: 0.25s; border: none; text-decoration: none; color: black; padding-bottom: 3px;">Sign Up</a>
                <br><a href="../index.php" style="transition: 0.25s; border: none; text-decoration: none; color: black; padding-bottom: 3px;">Log in</a>
            <?php endif; ?>
        </div>
    </nav>
</header>

<h1>Manage Your Profile</h1>

<form method="POST" style="margin-top: 150px;">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?= htmlspecialchars($user['name']); ?>" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']); ?>" required>

    <button class="updatebttn" type="submit">Update Profile</button>
</form>

<?php if (isset($message)): ?>
    <p class="message"><?= htmlspecialchars($message); ?></p>
<?php endif; ?>

</body>
</html>

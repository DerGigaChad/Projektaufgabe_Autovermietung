<?php
session_start(); // Start session to store user data

// Example: Retrieve username from session (if logged in)
$loggedInUser = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Header styling */
        .header {
            background-color: #ff5f00;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logo styling */
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Navigation styling */
        .nav-menu {
            display: flex;
            gap: 15px; /* Spacing between links */
        }

        /* Styling for navigation links */
        .nav-menu a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        /* Hover effect for navigation links */
        .nav-menu a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        /* User info styling */
        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 1rem;
            font-weight: bold;
        }

        /* Logout button styling */
        .logout-btn {
            background-color: white;
            color: #ff5f00;
            padding: 5px 12px;
            font-size: 0.9rem;
            font-weight: bold;
            border: 2px solid #ff5f00;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #ff5f00;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Header section with logo, navigation, and user info -->
    <header class="header">
        <div class="logo">Car Rental Service</div>
        
        <!-- Navigation links -->
        <nav class="nav-menu">
            <a href="booking.php">Meine Buchung</a>
            <a href="contact.php">Kontakt</a>
        </nav>
        
        <!-- User info: Greeting, login or logout -->
        <div class="user-info">
            <?php if ($loggedInUser): ?>
                <!-- If user is logged in, display their name -->
                Hallo, <a href="booking.php" style="color: white; text-decoration: none; font-weight: bold;">
                    <?php echo htmlspecialchars($loggedInUser); ?>
                </a>

                <!-- Logout button (uses POST for security) -->
                <form action="logout.php" method="POST" style="display: inline;">
                    <button type="submit" class="logout-btn">Abmelden</button>
                </form>
                
            <?php else: ?>
                <!-- If user is not logged in, display a login link -->
                <a href="login.php" style="color: white;">Anmelden</a>
            <?php endif; ?>
        </div>
    </header>
</body>
</html>
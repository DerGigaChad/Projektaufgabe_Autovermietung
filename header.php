<?php
session_start(); // Session starten, um Benutzerdaten zu speichern

// Beispiel: Benutzername aus Session abrufen (falls angemeldet)
$loggedInUser = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #ff5f00;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        nav {
            display: flex;
            gap: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .user-info {
            font-size: 1rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Car Rental Service</div>
        <nav>
            <a href="manage_booking.php">Meine Buchung</a>
            <a href="contact.php">Kontakt</a>
        </nav>
        <div class="user-info">
            <?php if ($loggedInUser): ?>
                Hallo, <a href="manage_booking.php" style="color: white; text-decoration: none; font-weight: bold;"> <?php echo htmlspecialchars($loggedInUser); ?>!</a>
                <a href="logout.php" style="color: white; margin-left: 10px;">(Abmelden)</a>
            <?php else: ?>
                <a href="login.php" style="color: white;">Anmelden</a>
            <?php endif; ?>
        </div>
    </header>
</body>
</html>

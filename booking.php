<?php
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login if session is missing
    exit();
}

// Prepare an empty array for bookings
$bookings = []; // No dummy data, only real database data will be shown
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings</title>
    <style>
        /* Global styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #f8f8f8;
            text-align: center;
            padding: 20px;
        }

        /* Booking container */
        .booking-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 800px;
            margin: 30px auto;
        }

        h1 {
            color: rgb(255, 0, 43);
            margin-bottom: 20px;
        }

        .booking-list {
            list-style: none;
            padding: 0;
        }

        .booking-item {
            background: #fff;
            padding: 15px;
            margin: 10px 0;
            border-left: 5px solid rgb(255, 0, 43);
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .no-bookings {
            color: #777;
            font-size: 1.2rem;
            margin-top: 20px;
        }

    

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .booking-container {
                width: 95%;
                padding: 30px;
            }
        }
    </style>
</head>
<body>

    <!-- Booking Container -->
    <div class="booking-container">
        <h1>Meine Buchungen</h1>

        <?php
        // Check if there are any bookings
        if (!empty($bookings)) {
            echo "<ul class='booking-list'>";
            foreach ($bookings as $booking) {
                echo "<li class='booking-item'><strong>{$booking['car']}</strong> - {$booking['date']} in {$booking['location']}</li>";
            }
            echo "</ul>";
        } else {
            echo "<p class='no-bookings'>Sie haben noch keine Buchungen getätigt.</p>";
        }
        ?>


    </div>

</body>
</html>
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Database connection
$conn = new mysqli("localhost", "root", "", "car_rental");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// User ID from session
$user_id = $_SESSION['user_id'];

// Number of bookings per page
$bookings_per_page = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $bookings_per_page;

// Get total number of bookings
$total_sql = "SELECT COUNT(*) AS total FROM bookings WHERE user_id = ?";
$total_stmt = $conn->prepare($total_sql);
$total_stmt->bind_param("i", $user_id);
$total_stmt->execute();
$total_result = $total_stmt->get_result();
$total_row = $total_result->fetch_assoc();
$total_bookings = $total_row['total'];

$total_pages = ceil($total_bookings / $bookings_per_page);

// Get bookings for the current page
$sql = "SELECT booking_id, car_model, booking_date, return_date, price FROM bookings 
        WHERE user_id = ? 
        LIMIT ?, ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iii", $user_id, $offset, $bookings_per_page);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f9f9f9;
            padding: 20px;
        }

        .booking-table {
            width: 80%;
            margin: auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #ff5f00;
            color: white;
        }

        .paging {
            margin-top: 20px;
            text-align: center;
        }

        .paging a {
            padding: 10px 15px;
            background-color: #ff5f00;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 5px;
        }

        .paging a.disabled {
            background-color: #ccc;
            pointer-events: none;
        }

        .no-bookings {
            font-size: 1.2rem;
            color: #666;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>My Bookings</h1>
    <p>You have <strong><?php echo $total_bookings; ?></strong> bookings.</p>

    <div class="booking-table">
        <?php if ($result->num_rows > 0): ?>
            <table>
                <tr>
                    <th>Booking ID</th>
                    <th>Car</th>
                    <th>Booking Date</th>
                    <th>Return Date</th>
                    <th>Price</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['booking_id']; ?></td>
                        <td><?php echo htmlspecialchars($row['car_model']); ?></td>
                        <td><?php echo $row['booking_date']; ?></td>
                        <td><?php echo $row['return_date']; ?></td>
                        <td><?php echo number_format($row['price'], 2, ',', '.') . " €"; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
            
            <!-- Paging Function -->
            <div class="paging">
                <?php if ($page > 1): ?>
                    <a href="?page=<?php echo $page - 1; ?>">← Previous</a>
                <?php else: ?>
                    <a class="disabled">← Previous</a>
                <?php endif; ?>

                <?php if ($page < $total_pages): ?>
                    <a href="?page=<?php echo $page + 1; ?>">Next →</a>
                <?php else: ?>
                    <a class="disabled">Next →</a>
                <?php endif; ?>
            </div>

        <?php else: ?>
            <p class="no-bookings">You have no bookings.</p>
        <?php endif; ?>
    </div>

</body>
</html>

<?php
$conn->close();
?>
<?php
session_start();

// Connect to database
$conn = new mysqli("localhost", "root", "", "car_rental");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if user is logged in, otherwise redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Pagination setup
$bookings_per_page = 5; // Maximum number of bookings per page
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$offset = ($page - 1) * $bookings_per_page;

// Get total number of bookings for the logged-in user
$total_stmt = $conn->prepare("SELECT COUNT(*) AS total FROM bookings WHERE user_id = ?");
$total_stmt->bind_param("i", $user_id);
$total_stmt->execute();
$total_result = $total_stmt->get_result()->fetch_assoc();
$total_bookings = $total_result['total'];
$total_pages = max(1, ceil($total_bookings / $bookings_per_page));

// Retrieve bookings for the current page
$stmt = $conn->prepare("SELECT id, car_model, booking_date, return_date, price FROM bookings WHERE user_id = ? LIMIT ?, ?");
$stmt->bind_param("iii", $user_id, $offset, $bookings_per_page);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meine Buchungen</title>
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
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
            background-color:rgb(255, 0, 43);
            color: white;
        }
        .paging {
            margin-top: 20px;
        }
        .paging a {
            padding: 10px 15px;
            background-color:rgb(255, 0, 43);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 5px;
        }
        .paging a.disabled {
            background-color: #ccc;
            pointer-events: none;
        }
        .success-message {
            color: green;
            font-size: 1rem;
            margin-bottom: 15px;
            padding: 10px;
            background-color: #eaffea;
            border: 1px solid #5cb85c;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <h1>Meine Buchungen</h1>

    <!-- Display success message if user is redirected after a successful booking -->
    <?php if (isset($_GET['booking']) && $_GET['booking'] == "success"): ?>
        <p class="success-message">
            Ihre Buchung war erfolgreich. 
            <!-- Provide a direct link to view bookings -->
            <a href="booking.php">Hier sehen Sie Ihre Buchungen</a>.
        </p>
    <?php endif; ?>

    <div class="booking-table">
        <?php if ($result->num_rows > 0): ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Auto</th>
                    <th>Buchungsdatum</th>
                    <th>Rückgabedatum</th>
                    <th>Preis (€)</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= htmlspecialchars($row['car_model']); ?></td>
                        <td><?= $row['booking_date']; ?></td>
                        <td><?= $row['return_date']; ?></td>
                        <td><?= number_format($row['price'], 2, ',', '.') . " €"; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>

            <!-- Pagination Navigation -->
            <div class="paging">
                <!-- Only enable the "Back" button if there's a previous page -->
                <a href="?page=<?= $page - 1; ?>" class="<?= $page == 1 ? 'disabled' : ''; ?>">← Zurück</a>

                <!-- Only enable the "Next" button if there's another page -->
                <a href="?page=<?= min($total_pages, $page + 1); ?>" class="<?= $page == $total_pages ? 'disabled' : ''; ?>">Weiter →</a>
            </div>

        <?php else: ?>
            <p>Sie haben keine Buchungen getätigt.</p>
        <?php endif; ?>
    </div>

</body>
</html>

<?php
$conn->close();
?>
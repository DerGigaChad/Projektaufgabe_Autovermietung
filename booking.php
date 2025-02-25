<?php
session_start();

// Verbindung zur Datenbank
$conn = new mysqli("localhost", "root", "", "car_rental");
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Prüfen, ob der Benutzer eingeloggt ist
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Paging-Variablen setzen
$bookings_per_page = 5;
$page = max(1, (int)($_GET['page'] ?? 1));
$offset = ($page - 1) * $bookings_per_page;

// Gesamtanzahl der Buchungen abrufen
$total_result = $conn->query("SELECT COUNT(*) AS total FROM bookings WHERE user_id = $user_id");
$total_bookings = $total_result->fetch_assoc()['total'];
$total_pages = max(1, ceil($total_bookings / $bookings_per_page));

// Buchungen für die aktuelle Seite abrufen
$result = $conn->query("SELECT id, car_model, booking_date, return_date, price 
                        FROM bookings 
                        WHERE user_id = $user_id 
                        ORDER BY booking_date DESC 
                        LIMIT $bookings_per_page OFFSET $offset");
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meine Buchungen</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; background: #f9f9f9; padding: 20px; }
        .booking-table { width: 80%; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 10px; border-bottom: 1px solid #ddd; text-align: left; }
        th { background: rgb(255, 0, 43); color: white; }
        .paging { margin-top: 20px; }
        .paging a { padding: 10px 15px; background: rgb(255, 0, 43); color: white; text-decoration: none; border-radius: 5px; margin: 5px; }
        .paging a.disabled { background: #ccc; pointer-events: none; }
    </style>
</head>
<body>

    <h1>Meine Buchungen</h1>

    <!-- Erfolgsmeldung nach Buchung -->
    <?php if ($_GET['booking'] ?? '' === "success"): ?>
        <p style="color: green;">✅ Ihre Buchung war erfolgreich. <a href="booking.php">Hier sehen Sie Ihre Buchungen</a>.</p>
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

            <!-- Paging-Navigation -->
            <div class="paging">
                <a href="?page=<?= $page - 1; ?>" class="<?= $page == 1 ? 'disabled' : ''; ?>">← Zurück</a>
                <a href="?page=<?= $page + 1; ?>" class="<?= $page >= $total_pages ? 'disabled' : ''; ?>">Weiter →</a>
            </div>

        <?php else: ?>
            <p>Sie haben keine Buchungen getätigt.</p>
        <?php endif; ?>
    </div>

</body>
</html>

<?php $conn->close(); ?>
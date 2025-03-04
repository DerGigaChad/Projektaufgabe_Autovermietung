<?php
session_start();
$conn = new mysqli("localhost", "root", "", "testus");

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    die("Fehler: Sie müssen eingeloggt sein, um eine Buchung vorzunehmen.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_SESSION['user_id'];
    $vehicleId = $_POST['vehicleId'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];

    // Validate that the dates are not empty
    if (empty($startDate) || empty($endDate)) {
        die("Fehler: Ungültige Daten.");
    }

    // Prevent double bookings (Check if the vehicle is already booked in the selected period, including exact same-day bookings)
    $checkSql = "SELECT * FROM bookings WHERE VehicleID = ? AND (NOT (EndDate < ? OR StartDate > ?) OR (StartDate = ? AND EndDate = ?))";
    $stmt = $conn->prepare($checkSql);
    $stmt->bind_param("issss", $vehicleId, $startDate, $endDate, $startDate, $endDate);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        die("Fehler: Dieses Fahrzeug ist für den gewählten Zeitraum bereits gebucht.");
    }

    // Insert booking into the database
    $sql = "INSERT INTO bookings (UserID, VehicleID, StartDate, EndDate) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiss", $userId, $vehicleId, $startDate, $endDate);

    if ($stmt->execute()) {
        echo "Erfolg: Ihre Buchung wurde gespeichert!";
    } else {
        echo "Fehler: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

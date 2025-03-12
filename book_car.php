<?php
session_start();
$conn = new mysqli("localhost", "root", "", "car_rental");

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Check if the user is logged in
if (!isset($_SESSION['userID'])) {
    die("Fehler: Sie müssen eingeloggt sein, um eine Buchung vorzunehmen.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_SESSION['userID'];
    $vehicleId = $_POST['vehicleId'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];

    // Validate that the dates are not empty
    if (empty($startDate) || empty($endDate)) {
        die("Fehler: Ungültige Daten.");
    }

    // Prevent double bookings (check for overlapping dates)
    $checkSql = "SELECT * FROM bookings 
                 WHERE VehicleID = ? 
                 AND (StartDate < ? AND EndDate > ?)";
    $stmt = $conn->prepare($checkSql);
    $stmt->bind_param("iss", $vehicleId, $endDate, $startDate);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['booking_error'] = "Fehler: Dieses Fahrzeug ist für den gewählten Zeitraum bereits gebucht.";
    } else {
        // Insert booking into the database
        $sql = "INSERT INTO bookings (UserID, VehicleID, StartDate, EndDate) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiss", $userId, $vehicleId, $startDate, $endDate);

        if ($stmt->execute()) {
            $_SESSION['booking_success'] = "Erfolg: Ihre Buchung wurde gespeichert!";
        } else {
            $_SESSION['booking_error'] = "Fehler: " . $stmt->error;
        }
    }

    $stmt->close();
    $conn->close();

    // Redirect back to Productoverview.php
    header("Location: Productoverview.php");
    exit();
}
?>
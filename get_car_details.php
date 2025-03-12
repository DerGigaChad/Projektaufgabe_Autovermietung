<?php
session_start();
$conn = new mysqli("localhost", "root", "", "car_rental");

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modelId = $_POST['modelId'];
    $city = $_POST['city'];
    $pickup = $_POST['pickup'];
    $return = $_POST['return'];

    // Select a random available car from the specified model and city
    $sql = "SELECT v.VehicleID, m.Manufacturer, m.ModelName, m.ImagePath, l.City, m.VehicleType, 
                   m.SeatCount, m.Doors, m.Transmission, m.GPS, m.ClimateControl, m.PricePerDay
            FROM Vehicles v
            JOIN VehicleModels m ON v.ModelID = m.ModelID
            JOIN Locations l ON v.LocationID = l.LocationID
            WHERE m.ModelID = ? AND l.City = ?
            AND v.VehicleID NOT IN (
                SELECT b.VehicleID 
                FROM bookings b
                WHERE (b.StartDate <= ? AND b.EndDate >= ?)
            )
            ORDER BY RAND()
            LIMIT 1";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $modelId, $city, $return, $pickup);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Fetch the tally (number of available cars for the selected model and city)
        $tally_sql = "SELECT COUNT(v.VehicleID) AS AvailableCount
                      FROM Vehicles v
                      JOIN VehicleModels m ON v.ModelID = m.ModelID
                      JOIN Locations l ON v.LocationID = l.LocationID
                      WHERE m.ModelID = ? AND l.City = ?
                      AND v.VehicleID NOT IN (
                          SELECT b.VehicleID 
                          FROM bookings b
                          WHERE (b.StartDate <= ? AND b.EndDate >= ?)
                      )";
        $tally_stmt = $conn->prepare($tally_sql);
        $tally_stmt->bind_param("isss", $modelId, $city, $return, $pickup);
        $tally_stmt->execute();
        $tally_result = $tally_stmt->get_result();
        $tally_row = $tally_result->fetch_assoc();
        $availableCount = $tally_row['AvailableCount'];

        // Display car details in the pop-up
        ?>
        <div class='details-container'>
            <img class='car-image' src='<?= htmlspecialchars($row['ImagePath']); ?>' alt='Car Image'>
            <div class='details-text'>
                <strong><?= htmlspecialchars($row['Manufacturer'] . " " . $row['ModelName']); ?></strong><br>
                <span class='location'>Standort: <?= htmlspecialchars($row['City']); ?></span><br>
                Typ: <?= htmlspecialchars($row['VehicleType']); ?><br>
                Sitze: <?= htmlspecialchars($row['SeatCount']); ?> | Türen: <?= htmlspecialchars($row['Doors']); ?><br>
                Getriebe: <?= htmlspecialchars($row['Transmission']); ?><br>
                GPS: <?= ($row['GPS'] ? 'Ja' : 'Nein'); ?> | Klimaanlage: <?= ($row['ClimateControl'] ? 'Ja' : 'Nein'); ?><br>
                Preis: <strong><?= number_format($row['PricePerDay'], 2); ?> €</strong> pro Tag<br>
                Verfügbare Autos: <strong><?= $availableCount; ?></strong><br> <!-- Tally display -->
                Standort: <strong><?= htmlspecialchars($row['City']); ?></strong><br> <!-- City display -->

                <?php if (!empty($pickup) && !empty($return)) { ?>
                    <p class='selected-period'>
                        Ihr ausgewählter Zeitraum: 
                        <strong><?= date("d.m.Y", strtotime($pickup)); ?> - <?= date("d.m.Y", strtotime($return)); ?></strong>
                    </p>
                    <?php $buttonDisabled = ""; ?>
                <?php } else { ?>
                    <p class='error-message' style='color: red; font-weight: bold;'>Bitte wählen Sie ein Start- und Enddatum!</p>
                    <?php $buttonDisabled = "disabled"; ?>
                <?php } ?>

                <?php if (isset($_SESSION['userID'])) { ?>
                    <form method='POST' action='book_car.php'>
                        <input type='hidden' name='vehicleId' value='<?= $row['VehicleID']; ?>'>
                        <input type='hidden' name='start_date' value='<?= $pickup; ?>'>
                        <input type='hidden' name='end_date' value='<?= $return; ?>'>
                        <button type='submit' class='book-btn' <?= $buttonDisabled; ?>>Jetzt buchen</button>
                    </form>
                <?php } else { ?>
                    <p class='login-warning'>Bitte <a href='login.php'>loggen Sie sich ein</a>, um eine Buchung vorzunehmen.</p>
                <?php } ?>
            </div>
        </div>
        <?php
    } else {
        echo "<p style='color: red;'>Kein verfügbares Fahrzeug gefunden.</p>";
    }

    $stmt->close();
    $tally_stmt->close();
    $conn->close();
}
?>
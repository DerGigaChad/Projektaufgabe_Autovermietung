<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
$conn = new mysqli("localhost", "root", "", "car_rental");

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['vehicleId'])) {
    $vehicleId = $_POST['vehicleId'];
    $pickup = isset($_POST['pickup']) ? $_POST['pickup'] : null;
    $return = isset($_POST['return']) ? $_POST['return'] : null;

    $sql = "SELECT v.VehicleID, m.Manufacturer, m.ModelName, m.ImagePath, l.City, m.vehicleType, 
                   m.SeatCount, m.Doors, m.Transmission, m.GPS, m.ClimateControl, m.PricePerDay, 
                   COUNT(v.VehicleID) AS AvailableCars
            FROM Vehicles v
            JOIN VehicleModels m ON v.ModelID = m.ModelID
            JOIN Locations l ON v.LocationID = l.LocationID
            WHERE v.VehicleID = ?
            GROUP BY v.ModelID, v.LocationID";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $vehicleId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        ?>
        <div class='details-container'>
            <img class='car-image' src='<?= htmlspecialchars($row['ImagePath']); ?>' alt='Car Image'>
            <div class='details-text'>
                <strong><?= htmlspecialchars($row['Manufacturer'] . " " . $row['ModelName']); ?></strong><br>
                <span class='location'>Standort: <?= htmlspecialchars($row['City']); ?></span><br>
                Typ: <?= htmlspecialchars($row['vehicleType']); ?><br>
                Sitze: <?= htmlspecialchars($row['SeatCount']); ?> | Türen: <?= htmlspecialchars($row['Doors']); ?><br>
                Getriebe: <?= htmlspecialchars($row['Transmission']); ?><br>
                GPS: <?= ($row['GPS'] ? 'Ja' : 'Nein'); ?> | Klimaanlage: <?= ($row['ClimateControl'] ? 'Ja' : 'Nein'); ?><br>
                Preis: <strong><?= number_format($row['PricePerDay'], 2); ?> €</strong> pro Tag<br>
                Verfügbare Autos: <?= htmlspecialchars($row['AvailableCars']); ?><br>

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
                        <input type='hidden' name='vehicleId' value='<?= $vehicleId; ?>'>
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
    }
    $stmt->close();
}
$conn->close();
?>

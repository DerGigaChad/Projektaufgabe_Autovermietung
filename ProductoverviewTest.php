<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "car_rental";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get filter parameters from index.php
$location = isset($_GET['location']) ? $conn->real_escape_string($_GET['location']) : '';
$manufacturer = isset($_GET['manufacturer']) ? $conn->real_escape_string($_GET['manufacturer']) : '';
$vehicleType = isset($_GET['vehicleType']) ? $conn->real_escape_string($_GET['vehicleType']) : '';
$transmission = isset($_GET['transmission']) ? $conn->real_escape_string($_GET['transmission']) : '';
$fuelType = isset($_GET['fuelType']) ? $conn->real_escape_string($_GET['fuelType']) : '';
$seats = isset($_GET['seats']) ? intval($_GET['seats']) : '';
$doors = isset($_GET['doors']) ? intval($_GET['doors']) : '';
$climate = isset($_GET['climate']) ? 1 : '';
$gps = isset($_GET['gps']) ? 1 : '';
$age = isset($_GET['age']) ? intval($_GET['age']) : '';
$drive = isset($_GET['drive']) ? $conn->real_escape_string($_GET['drive']) : '';
$price = isset($_GET['price']) ? floatval($_GET['price']) : '';
$sort = isset($_GET['sort']) ? $conn->real_escape_string($_GET['sort']) : 'PricePerDay ASC';
$pickup = isset($_GET['pickup']) ? $conn->real_escape_string($_GET['pickup']) : '';
$return = isset($_GET['return']) ? $conn->real_escape_string($_GET['return']) : '';

// Construct SQL query with filters
$sql_filtered = "SELECT v.*, m.Manufacturer, m.ModelName, m.VehicleType, m.SeatCount, m.Transmission, m.FuelType, m.PricePerDay, l.City 
        FROM Vehicles v
        JOIN VehicleModels m ON v.ModelID = m.ModelID
        JOIN Locations l ON v.LocationID = l.LocationID
        WHERE 1=1";

if (!empty($location)) {
    $sql_filtered .= " AND l.City = '$location'";
}
if (!empty($manufacturer)) {
    $sql_filtered .= " AND m.Manufacturer = '$manufacturer'";
}
if (!empty($vehicleType)) {
    $sql_filtered .= " AND m.VehicleType = '$vehicleType'";
}
if (!empty($transmission)) {
    $sql_filtered .= " AND m.Transmission = '$transmission'";
}
if (!empty($fuelType)) {
    $sql_filtered .= " AND m.FuelType = '$fuelType'";
}
if (!empty($seats)) {
    $sql_filtered .= " AND m.SeatCount = '$seats'";
}
if (!empty($doors)) {
    $sql_filtered .= " AND v.Doors = '$doors'";
}
if (!empty($climate)) {
    $sql_filtered .= " AND v.ClimateControl = 1";
}
if (!empty($gps)) {
    $sql_filtered .= " AND v.GPS = 1";
}
if (!empty($age)) {
    $sql_filtered .= " AND v.Year >= YEAR(CURDATE()) - $age";
}
if (!empty($drive)) {
    $sql_filtered .= " AND v.DriveType = '$drive'";
}
if (!empty($price)) {
    $sql_filtered .= " AND m.PricePerDay <= $price";
}
$sql_filtered .= " ORDER BY $sort LIMIT 1000";
$result_filtered = $conn->query($sql_filtered);
echo "Total rows found: " . $result_filtered->num_rows;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produktübersicht - Autovermietung</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Verfügbare Fahrzeuge</h1>
    
    <!-- Filter Form -->
    <form method="GET" action="Productoverview.php">
        <label for="location">Ort:</label>
        <input type="text" id="location" name="location" value="<?php echo htmlspecialchars($location); ?>">
        
        <label for="manufacturer">Hersteller:</label>
        <select id="manufacturer" name="manufacturer">
            <option value="">alle</option>
            <option value="BMW">BMW</option>
            <option value="Audi">Audi</option>
        </select>
        
        <label for="vehicleType">Typ:</label>
        <select id="vehicleType" name="vehicleType">
            <option value="">alle</option>
            <option value="SUV">SUV</option>
        </select>
        
        <label for="transmission">Getriebe:</label>
        <select id="transmission" name="transmission">
            <option value="">alle</option>
            <option value="Automatic">Automatik</option>
        </select>
        
        <label for="fuelType">Kraftstoff:</label>
        <select id="fuelType" name="fuelType">
            <option value="">alle</option>
            <option value="Diesel">Diesel</option>
        </select>
        
        <button type="submit">Filtern</button>
    </form>
    
    <table border="1">
        <tr>
            <th>Hersteller</th>
            <th>Modell</th>
            <th>Typ</th>
            <th>Sitze</th>
            <th>Getriebe</th>
            <th>Kraftstoff</th>
            <th>Preis pro Tag</th>
            <th>Standort</th>
        </tr>
        <?php while ($row = $result_filtered->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['Manufacturer']); ?></td>
                <td><?php echo htmlspecialchars($row['ModelName']); ?></td>
                <td><?php echo htmlspecialchars($row['VehicleType']); ?></td>
                <td><?php echo htmlspecialchars($row['SeatCount']); ?></td>
                <td><?php echo htmlspecialchars($row['Transmission']); ?></td>
                <td><?php echo htmlspecialchars($row['FuelType']); ?></td>
                <td><?php echo htmlspecialchars($row['PricePerDay']); ?> €</td>
                <td><?php echo htmlspecialchars($row['City']); ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>

<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "tes23";

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

//Reset all filters
$filterFields = ['manufacturer', 'vehicleType', 'location', 'transmission']; // List of all filters

if (isset($_GET['reset'])) {
    // empty all filters
    foreach ($filterFields as $field) {
        $$field = ''; 
    }
} else {
    // Werte aus dem Formular übernehmen
    foreach ($filterFields as $field) {
        $$field = isset($_GET[$field]) ? $_GET[$field] : '';
    }
}


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

$limit = 25; // Number of results per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Get current page
if ($page < 1) $page = 1; // Ensure page is at least 1
$offset = ($page - 1) * $limit; // Calculate offset for SQL query

// Get the total number of results
$totalQuery = $conn->query("SELECT COUNT(*) FROM vehicles"); 
$totalResults = $totalQuery->fetch_row()[0];
$totalPages = ceil($totalResults / $limit);

$sql_filtered .= " ORDER BY $sort";
$sql_filtered .= " LIMIT $limit OFFSET $offset";
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
    <style>
        .pagination {
            margin-top: 20px;
            text-align: center;
        }

        .button {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 0 5px;
            transition: background 0.3s ease-in-out;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .button.disabled {
            background-color: #ccc;
            cursor: not-allowed;
            pointer-events: none;
        }
</style>
</head>
<body>
    <h1>Verfügbare Fahrzeuge</h1>
    
    <!-- Filter Form -->
    <form method="GET" action="Productoverviewtest.php">
        <label for="location">Standort:</label>
        <select id="location" name="location">
            <option value="">alle</option>
            <option value="Berlin" <?= $location == 'Berlin' ? 'selected' : '' ?>>Berlin</option>
            <option value="Hamburg" <?= $location == 'Hamburg' ? 'selected' : '' ?>>Hamburg</option>
            <option value="München" <?= $location == 'München' ? 'selected' : '' ?>>München</option>
            <option value="Köln" <?= $location == 'Köln' ? 'selected' : '' ?>>Köln</option>
            <option value="Bochum" <?= $location == 'Bochum' ? 'selected' : '' ?>>Bochum</option>
            <option value="Rostock" <?= $location == 'Rostock' ? 'selected' : '' ?>>Rostock</option>
            <option value="Paderborn" <?= $location == 'Paderborn' ? 'selected' : '' ?>>Paderborn</option>
            <option value="Leipzig" <?= $location == 'Leipzig' ? 'selected' : '' ?>>Leipzig</option>
            <option value="Dortmund" <?= $location == 'Dortmund' ? 'selected' : '' ?>>Dortmund</option>
            <option value="Freiburg" <?= $location == 'Freiburg' ? 'selected' : '' ?>>Freiburg</option>
            <option value="Bremen" <?= $location == 'Bremen' ? 'selected' : '' ?>>Bremen</option>
            <option value="Dresden" <?= $location == 'Dresden' ? 'selected' : '' ?>>Dresden</option>
            <option value="Bielefeld" <?= $location == 'Bielefeld' ? 'selected' : '' ?>>Bielefeld</option>
            <option value="Nürnberg" <?= $location == 'Nürnberg' ? 'selected' : '' ?>>Nürnberg</option>
        </select>
        
        <label for="manufacturer">Hersteller:</label>
        <select id="manufacturer" name="manufacturer">
        <option value="" <?= $manufacturer == '' ? 'selected' : '' ?>>Alle</option>
        <option value="BMW" <?= $manufacturer == 'BMW' ? 'selected' : '' ?>>BMW</option>
        <option value="Audi" <?= $manufacturer == 'Audi' ? 'selected' : '' ?>>Audi</option>
        <option value="Ford" <?= $manufacturer == 'Ford' ? 'selected' : '' ?>>Ford</option>
        <option value="Volkswagen" <?= $manufacturer == 'Volkswagen' ? 'selected' : '' ?>>Volkswagen</option>
        <option value="Opel" <?= $manufacturer == 'Opel' ? 'selected' : '' ?>>Opel</option>
        <option value="Skoda" <?= $manufacturer == 'Skoda' ? 'selected' : '' ?>>Skoda</option>
        </select>
        
        <label for="vehicleType">Typ:</label>
        <select id="vehicleType" name="vehicleType">
            <option value="" <?= $vehicleType == '' ? 'selected' : '' ?>>Alle</option>
            <option value="Limousine" <?= $vehicleType == 'Limousine' ? 'selected' : '' ?>>Limousine</option>
            <option value="3-Türer" <?= $vehicleType == '3-Türer' ? 'selected' : '' ?>>3-Türer</option>
            <option value="Combi" <?= $vehicleType == 'Combi' ? 'selected' : '' ?>>Combi</option>
            <option value="Cabrio" <?= $vehicleType == 'Cabrio' ? 'selected' : '' ?>>Cabrio</option>
            <option value="Turnier" <?= $vehicleType == 'Turnier' ? 'selected' : '' ?>>Turnier</option>
            <option value="Aut." <?= $vehicleType == 'Aut.' ? 'selected' : '' ?>>Aut.</option>
            <option value="Touring" <?= $vehicleType == 'Touring' ? 'selected' : '' ?>>Touring</option>
            <option value="Allspace" <?= $vehicleType == 'Allspace' ? 'selected' : '' ?>>Allspace</option>
            <option value="Cabriolet" <?= $vehicleType == 'Cabriolet' ? 'selected' : '' ?>>Cabriolet</option>
            <option value="T-Modell" <?= $vehicleType == 'T-Modell' ? 'selected' : '' ?>>T-Modell</option>
            <option value="Touring Aut." <?= $vehicleType == 'Touring Aut.' ? 'selected' : '' ?>>Touring Aut.</option>
            <option value="Coupé" <?= $vehicleType == 'Coupé' ? 'selected' : '' ?>>Coupé</option>
            <option value="Transporter" <?= $vehicleType == 'Transporter' ? 'selected' : '' ?>>Transporter</option>
            <option value="Roadster" <?= $vehicleType == 'Roadster' ? 'selected' : '' ?>>Roadster</option>
        </select>

        
        <label for="transmission">Getriebe:</label>
        <select id="transmission" name="transmission">
            <option value="" <?= $transmission == '' ? 'selected' : '' ?>>Alle</option>
            <option value="Automatikschaltung" <?= $transmission == 'Automatikschaltung' ? 'selected' : '' ?>>Automatikschaltung</option>
            <option value="manuelle Schaltung" <?= $transmission == 'manuelle Schaltung' ? 'selected' : '' ?>>manuelle Schaltung</option>
        </select>
        
        <label for="fuelType">Kraftstoff:</label>
        <select id="fuelType" name="fuelType">
            <option value="">alle</option>
            <option value="Diesel">Diesel</option>
        </select>
        
        <button type="submit" name="filter" value="1">Filtern</button>
        <button type="submit" name="reset" value="1">Filter zurücksetzen</button>
        <a href="index.php" style="display: inline-block; padding: 6px 12px; background-color: #ccc; color: black; text-decoration: none; border-radius: 4px; margin-left: 10px;">
        alle Filter zurücksetzen
        </a>
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
    <div class="pagination">
    <!-- Previous Button -->
    <a href="?<?= http_build_query(array_merge($_GET, ['page' => max(1, $page - 1)])) ?>" 
       class="button <?= ($page <= 1) ? 'disabled' : '' ?>">❮ Prev</a>

    <!-- Page Info -->
    <span>Page <?= $page ?> of <?= $totalPages ?></span>

    <!-- Next Button -->
    <a href="?<?= http_build_query(array_merge($_GET, ['page' => min($totalPages, $page + 1)])) ?>" 
       class="button <?= ($page >= $totalPages) ? 'disabled' : '' ?>">Next ❯</a>
    </div>
</body>
</html>

<?php $conn->close(); ?>

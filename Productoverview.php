<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
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


//Reset all filters
$filterFields = ['manufacturer', 'vehicleType', 'location', 'transmission', 'fuelType']; // List of all filters

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
$sql_filtered = "SELECT v.*, m.ImagePath, m.Manufacturer, m.ModelName, m.VehicleType, m.SeatCount, m.Transmission, m.FuelType, m.PricePerDay, l.City 
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produktübersicht - Autovermietung</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* <General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        p {
            color: #ccc;
        }

        body {
            background: linear-gradient(135deg, #1e1e1e, #3a3a3a);
            display: inline-block;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Backgrounf effect */
        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('assets/bg-pattern.jpg') no-repeat center center/cover;
            filter: blur(8px);
            z-index: -1;
        }

        /* filter-container */
        .filter-container {
            background: rgba(255, 255, 255, 0.36);
            backdrop-filter: blur(15px);
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 3000px;
            text-align: center;
            color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .filter-container:hover {
            transform: scale(1.02);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
        }

        h1 {
            font-weight: 600;
            font-size: 2rem;
            margin-bottom: 25px;
        }

        label {
            font-weight: 400;
            text-align: left;
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
        }

        /* Responsiveness */
        @media (max-width: 480px) {
            .filter-container {
                width: 90%;
                padding: 40px;
            }
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #222; /* Dark background */
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #555; /* Border color */
            color: white; /* Set text color to white */
        }

        th {
            background-color: #ff1a1a; /* Red header background */
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #333; /* Slightly lighter for contrast */
        }

        span {
            color: white;
        }

        //////////////////////////
        
        .pagination {
            margin-top: 20px;
            text-align: center;
        }   

        .button {
            display: inline-block;
            padding: 12px 18px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            color: white;
            border-radius: 8px;
            margin: 0 8px;
            transition: all 0.3s ease-in-out;
            background: linear-gradient(45deg, #ff3c3c, #b30000);
            box-shadow: 0px 4px 10px rgba(255, 0, 0, 0.3);
            border: none;
        }

        .button:hover {
            background: linear-gradient(45deg, #ff0000, #800000);
            transform: scale(1.05);
            box-shadow: 0px 6px 15px rgba(255, 0, 0, 0.5);
        }

        .button.disabled {
            background: #555;
            cursor: not-allowed;
            pointer-events: none;
            opacity: 0.5;
        }
    </style>
</head>
<body>
    <div class="background"></div> 

    <div class="filter-container">
    <h1>Verfügbare Fahrzeuge</h1>
    
    <!-- Filter Form -->
    <form method="GET" action="Productoverview.php">
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
            <option value="" <?= $fuelType == '' ? 'selected' : '' ?>>Alle</option>
            <option value="Diesel" <?= $fuelType == 'Diesel' ? 'selected' : '' ?>>Diesel</option>
            <option value="Elektro" <?= $fuelType == 'Elektro' ? 'selected' : '' ?>>Elektro</option>
            <option value="Hybrid" <?= $fuelType == 'Hybrid' ? 'selected' : '' ?>>Hybrid</option>
            <option value="Benzin" <?= $fuelType == 'Benzin' ? 'selected' : '' ?>>Benzin</option>
        </select>
        
        <button type="submit" name="filter" value="1">Filtern</button>
        <button type="submit" name="reset" value="1">Filter zurücksetzen</button>
        <a href="index.php" style="display: inline-block; padding: 6px 12px; background-color: #ccc; color: black; text-decoration: none; border-radius: 4px; margin-left: 10px;">
        alle Filter zurücksetzen
        </a>
        </form>
        </div>
    
    <table border="1">
        <tr>
            <th>Bild</th>
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
                <td>
                <?php if (!empty($row['ImagePath'])): ?>
        
                    <img src="<?= htmlspecialchars($row['ImagePath']) ?>" alt="Car Image" width="100" height="100" style="border-radius: 8px;">
                <?php else: ?>
                    <span style="color: red;">No Image</span> <!-- If image is missing -->
                <?php endif; ?>
                </td>
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

<?php
session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "car_rental");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Default SQL query
$sql = "SELECT * FROM cars WHERE 1=1";
$params = [];

// Apply filters if search is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET['brand'])) {
        $sql .= " AND brand = ?";
        $params[] = $_GET['brand'];
    }
    if (!empty($_GET['fuel'])) {
        $sql .= " AND fuel_type = ?";
        $params[] = $_GET['fuel'];
    }
    if (!empty($_GET['ps_min'])) {
        $sql .= " AND ps >= ?";
        $params[] = $_GET['ps_min'];
    }
    if (!empty($_GET['price_max'])) {
        $sql .= " AND price_per_day <= ?";
        $params[] = $_GET['price_max'];
    }
}

// Prepare and execute query
$stmt = $conn->prepare($sql);
if (!empty($params)) {
    $types = str_repeat("s", count($params));
    $stmt->bind_param($types, ...$params);
}
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailsuche</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            text-align: center;
            padding: 20px;
        }

        .search-container {
            width: 80%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        select, input {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .search-btn {
            padding: 10px 15px;
            background-color:rgb(255, 0, 43);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-btn:hover {
            background-color: rgb(200, 0, 30);
        }

        .results {
            margin-top: 20px;
            text-align: left;
            width: 80%;
            margin: auto;
        }

        .car {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h1>Detailsuche</h1>

    <div class="search-container">
        <form method="GET" action="">
            <select name="brand">
                <option value="">Marke wählen</option>
                <option value="BMW">BMW</option>
                <option value="Audi">Audi</option>
                <option value="Mercedes">Mercedes</option>
                <option value="Volkswagen">Volkswagen</option>
            </select>

            <select name="fuel">
                <option value="">Kraftstoff wählen</option>
                <option value="Benzin">Benzin</option>
                <option value="Diesel">Diesel</option>
                <option value="Elektro">Elektro</option>
            </select>

            <input type="number" name="ps_min" placeholder="Min. PS" min="50">
            <input type="number" name="price_max" placeholder="Max. Preis (€ / Tag)" min="10">

            <button type="submit" class="search-btn">Suchen</button>
        </form>
    </div>

    <div class="results">
        <h2>Suchergebnisse</h2>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="car">
                    <p><strong>Marke:</strong> <?= htmlspecialchars($row['brand']); ?></p>
                    <p><strong>Modell:</strong> <?= htmlspecialchars($row['model']); ?></p>
                    <p><strong>PS:</strong> <?= $row['ps']; ?></p>
                    <p><strong>Kraftstoff:</strong> <?= htmlspecialchars($row['fuel_type']); ?></p>
                    <p><strong>Preis pro Tag:</strong> <?= number_format($row['price_per_day'], 2, ',', '.') . " €"; ?></p>
                    
                    <!-- Link to cardetail.php with same ID -->
                    <a href="cardetails.php?id=<?= $row['id']; ?>" class="search-btn">Details anzeigen</a>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Keine Fahrzeuge gefunden.</p>
        <?php endif; ?>
    </div>

</body>
</html>

<?php
$conn->close();
?>
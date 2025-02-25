<<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produktübersicht - Autovermietung</title>
    <style>
        /* Allgemeine Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1e1e1e, #3a3a3a);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        /* Hintergrund-Effekt */
        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('assets/bg-pattern.jpg') no-repeat center center/cover;
            filter: blur(8px);
            z-index: -1;
        }

        /* Container für die Filterübersicht */
        .product-container {
            background: rgba(255, 255, 255, 0.36);
            backdrop-filter: blur(15px);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 600px;
            text-align: center;
            color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-container:hover {
            transform: scale(1.02);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
        }

        h1 {
            font-weight: 600;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        /* Filtersektion */
        .filter-section {
            display: flex;
            flex-direction: column;
            gap: 15px;
            text-align: left;
        }

        label {
            font-weight: 400;
            color: rgba(255, 255, 255, 0.8);
            font-size: 1rem;
        }

        /* Eingabefelder */
        .filter-input, .filter-select {
            padding: 12px;
            font-size: 1rem;
            border: none;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            outline: none;
            transition: 0.3s ease;
            width: 100%;
        }

        .filter-input::placeholder, .filter-select::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .filter-input:focus, .filter-select:focus {
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }

        /* Button Styling */
        .filter-btn {
            background: linear-gradient(135deg, #ff416c, #ff4b2b);
            color: white;
            padding: 12px;
            font-size: 1rem;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn:hover {
            background: linear-gradient(135deg, #ff4b2b, #ff416c);
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(255, 75, 43, 0.4);
        }

        /* Responsiveness */
        @media (max-width: 480px) {
            .product-container {
                width: 90%;
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="background"></div> <!-- Hintergrund-Effekt -->

    <div class="product-container">
        <h1>Produktübersicht</h1>

        <section class="filter-section">
            <!-- Standort -->
            <label for="location">Standort:</label>
            <select id="location" class="filter-select">
                <option value="">-- Standort wählen --</option>
                <option value="Berlin">Berlin</option>
                <option value="Hamburg">Hamburg</option>
                <option value="München">München</option>
                <option value="Frankfurt">Frankfurt</option>
            </select>

            <!-- Datum -->
            <label for="start-date">Startdatum:</label>
            <input type="date" id="start-date" class="filter-input">

            <label for="end-date">Enddatum:</label>
            <input type="date" id="end-date" class="filter-input">

            <!-- Hersteller -->
            <label for="manufacturer">Hersteller:</label>
            <select id="manufacturer" class="filter-select">
                <option value="alle">alle</option>
                <option value="BMW">BMW</option>
                <option value="Audi">Audi</option>
                <option value="Mercedes">Mercedes</option>
            </select>

            <!-- Türen -->
            <label for="doors">Türen:</label>
            <select id="doors" class="filter-select">
                <option value="alle">alle</option>
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <!-- Sitze -->
            <label for="seats">Sitze:</label>
            <select id="seats" class="filter-select">
                <option value="alle">alle</option>
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <!-- Preis -->
            <label for="price">Max. Preis (€):</label>
            <input type="number" id="price" class="filter-input" min="0">

            <!-- Buttons -->
            <button onclick="resetFilters()" class="filter-btn">Zurücksetzen</button>
            <button onclick="filterCars()" class="filter-btn">Filtern</button>
        </section>
    </div>

    <script>
        function filterCars() {
            console.log("Filterfunktion gestartet!");
            let location = document.getElementById("location").value;
            let startDate = document.getElementById("start-date").value;
            let endDate = document.getElementById("end-date").value;
            let manufacturer = document.getElementById("manufacturer").value;
            let doors = document.getElementById("doors").value;
            let seats = document.getElementById("seats").value;
            let price = document.getElementById("price").value;

            let queryParams = new URLSearchParams();
            if (location) queryParams.append("location", location);
            if (startDate) queryParams.append("start-date", startDate);
            if (endDate) queryParams.append("end-date", endDate);
            if (manufacturer !== "alle") queryParams.append("manufacturer", manufacturer);
            if (doors !== "alle") queryParams.append("doors", doors);
            if (seats !== "alle") queryParams.append("seats", seats);
            if (price) queryParams.append("price", price);

            window.location.href = "cardetail.php?" + queryParams.toString();
        }

        function resetFilters() {
            document.querySelectorAll(".filter-select, .filter-input").forEach(el => el.value = "");
        }
    </script>
</body>
</html>
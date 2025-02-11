<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahrzeugdetails</title>
    <style>
        /* Grundlegende Stileinstellungen */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Container für die Fahrzeugdetails */
        .container {
            display: flex;
            width: 90%;
            max-width: 1200px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            align-items: center;
            gap: 30px;
        }

        /* Bereich für das Fahrzeugbild */
        .image-container {
            flex: 1;
        }

        /* Styling des Fahrzeugbildes */
        img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Bereich für die Fahrzeugdetails */
        .details-container {
            flex: 1;
            text-align: left;
        }

        /* Überschrift für das Fahrzeugmodell */
        h1 {
            color: #333;
            font-size: 2rem;
            margin-bottom: 15px;
        }

        /* Styling der Fahrzeugdetails */
        .details p {
            margin: 10px 0;
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
        }

        /* Buchungsbutton */
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 14px 24px;
            background-color: #ff5f00;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.1rem;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        /* Hover-Effekt für den Button */
        .btn:hover {
            background-color: #e25400;
        }
    </style>
</head>
<body>
    <!-- Hauptcontainer für die Fahrzeugdetails -->
    <div class="container">
        <!-- Bildcontainer für das Fahrzeugbild -->
        <div class="image-container">
            <img src="car-image.jpg" alt="Fahrzeugbild">
        </div>
        
        <!-- Container für Fahrzeuginformationen -->
        <div class="details-container">
            <h1>Fahrzeugmodell XYZ</h1>
            <div class="details">
                <p><strong>Marke:</strong> </p>
                <p><strong>Modell:</strong> </p>
                <p><strong>PS:</strong> </p>
                <p><strong>Kraftstoff:</strong> </p>
                <p><strong>Sitze:</strong> </p>
                <p><strong>Getriebe:</strong> </p>
            </div>
            <!-- Buchungsbutton -->
            <a href="#" class="btn">Buchung starten</a>
        </div>
    </div>
</body>
</html>

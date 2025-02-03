<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f9f9f9;
        }

        header {
            background-color: #ff5f00;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
            line-height: 1.6;
        }

        .buttons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .buttons a {
            text-decoration: none;
            color: white;
            background-color: #ff5f00;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .buttons a:hover {
            background-color: #e25400;
        }

        .image-container {
            margin-top: 20px;
        }

        .image-container img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header>
        <h1>Willkommen bei Car Rental Service</h1>
    </header>

    <div class="container">
        <h1>Ihre Reise beginnt hier!</h1>
        <p>
            Entdecken Sie eine große Auswahl an Fahrzeugen, die perfekt auf Ihre Bedürfnisse zugeschnitten sind.
            Egal, ob Sie einen kurzen Wochenendausflug planen oder eine längere Reise vor sich haben – wir haben das richtige Auto für Sie.
        </p>
        <div class="image-container">
            <img src="https://via.placeholder.com/800x400" alt="Ein Auto auf einer malerischen Straße">
        </div>
        <div class="buttons">
            <a href="login.php">Anmelden</a>
            <a href="manage_booking.php">Meine Buchung</a>
            <a href="contact.php">Kontakt</a>
        </div>
    </div>
</body>
</html>

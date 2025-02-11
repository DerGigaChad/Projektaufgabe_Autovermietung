<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldung</title>
    <style>
        /* Grundlegende Stileinstellungen für die Seite */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f9f9f9; /* Helle Hintergrundfarbe für eine angenehme Darstellung */
        }

        /* Container für das Anmeldeformular */
        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Schatten für eine leichte 3D-Optik */
        }

        /* Titel des Formulars */
        h1 {
            text-align: center;
            color: #333; /* Dunkelgraue Schriftfarbe */
        }

        /* Stil für das Formular und seine Elemente */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px; /* Abstand zwischen den Eingabefeldern */
        }

        /* Stile für die Beschriftungen der Eingabefelder */
        label {
            font-weight: bold;
            color: #555; /* Mittleres Grau für eine dezente Optik */
        }

        /* Gestaltung der Eingabefelder */
        input {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px; /* Abgerundete Ecken für ein modernes Design */
        }

        /* Stil des Anmelde-Buttons */
        button {
            background-color: #ff5f00; /* Auffällige Farbe für den Button */
            color: white;
            padding: 10px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Sanfte Farbänderung beim Hover */
        }

        /* Hover-Effekt für den Anmelde-Button */
        button:hover {
            background-color: #e25400; /* Dunklere Variante der Originalfarbe */
        }

        /* Gestaltung des Links zur Registrierung */
        .link {
            text-align: center;
            margin-top: 10px;
        }

        .link a {
            color: #ff5f00;
            text-decoration: none;
        }

        /* Unterstreichung des Links bei Hover für bessere Sichtbarkeit */
        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Hauptcontainer für das Anmeldeformular -->
    <div class="container">
        <h1>Anmeldung</h1>
        
        <!-- Formular zur Anmeldung, das Daten per POST an process_login.php sendet -->
        <form action="process_login.php" method="POST">
            
            <!-- Eingabefeld für die E-Mail-Adresse -->
            <label for="email">E-Mail-Adresse</label>
            <input type="email" id="email" name="email" placeholder="Geben Sie Ihre E-Mail ein" required>

            <!-- Eingabefeld für das Passwort -->
            <label for="password">Passwort</label>
            <input type="password" id="password" name="password" placeholder="Geben Sie Ihr Passwort ein" required>

            <!-- Button zum Absenden des Formulars -->
            <button type="submit">Anmelden</button>
        </form>
        
        <!-- Link zur Registrierung für Nutzer ohne Konto -->
        <div class="link">
            <p>Noch kein Konto? <a href="register.php">Registrieren</a></p>
        </div>
    </div>
</body>
</html>

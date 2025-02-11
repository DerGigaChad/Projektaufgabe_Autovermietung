<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrierung</title>
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

        /* Container für das Registrierungsformular */
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Überschrift des Formulars */
        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        /* Gruppierung für jedes Eingabefeld */
        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }

        /* Beschriftungen der Eingabefelder */
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Eingabefelder-Stil */
        input {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Stil des Registrierungs-Buttons */
        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #ff5f00;
            color: white;
            font-size: 1rem;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        /* Hover-Effekt für den Button */
        .btn:hover {
            background-color: #e25400;
        }
    </style>
</head>
<body>
    <!-- Container für das Registrierungsformular -->
    <div class="container">
        <h1>Registrierung</h1>
        
        <!-- Formular für die Benutzereingabe -->
        <form action="register_process.php" method="POST">
            
            <!-- Eingabefeld für den Vornamen -->
            <div class="form-group">
                <label for="vorname">Vorname</label>
                <input type="text" id="vorname" name="vorname" required>
            </div>
            
            <!-- Eingabefeld für den Nachnamen -->
            <div class="form-group">
                <label for="nachname">Nachname</label>
                <input type="text" id="nachname" name="nachname" required>
            </div>
            
            <!-- Eingabefeld für die E-Mail-Adresse -->
            <div class="form-group">
                <label for="email">E-Mail-Adresse</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <!-- Eingabefeld für das Passwort -->
            <div class="form-group">
                <label for="passwort">Passwort</label>
                <input type="password" id="passwort" name="passwort" required>
            </div>
            
            <!-- Eingabefeld zur Bestätigung des Passworts -->
            <div class="form-group">
                <label for="passwort_bestaetigen">Passwort bestätigen</label>
                <input type="password" id="passwort_bestaetigen" name="passwort_bestaetigen" required>
            </div>
            
            <!-- Registrierungs-Button -->
            <button type="submit" class="btn">Registrieren</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <style>
        /* Allgemeine Stile */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        /* Container für das Formular */
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Eingabefelder und Textbereiche */
        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        /* Nachrichtentextfeld anpassen */
        textarea {
            resize: none;
            height: 100px;
        }

        /* Absende-Button */
        button {
            background-color: #ff5f00;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #e25400;
        }

        /* Kontaktinformationen */
        .info {
            margin-top: 15px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kontakt</h1>
        
        <!-- Kontaktformular -->
        <form action="process_contact.php" method="POST">
            <input type="text" name="name" placeholder="Ihr Name" required>
            <input type="email" name="email" placeholder="Ihre E-Mail" required>
            <textarea name="message" placeholder="Ihre Nachricht" required></textarea>
            <button type="submit">Nachricht senden</button>
        </form>
        
        <!-- Kontaktinformationen -->
        <div class="info">
            <p>Alternativ: <strong>kontakt@carsharing.de</strong></p>
            <p>Telefon: <strong>+49 123 456 789</strong></p>
        </div>
    </div>
</body>
</html>
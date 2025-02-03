<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input, textarea {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: none;
            height: 100px;
        }

        button {
            background-color: #ff5f00;
            color: white;
            padding: 10px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e25400;
        }

        .info {
            text-align: center;
            margin-top: 20px;
        }

        .info p {
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kontakt</h1>
        <form action="process_contact.php" method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Geben Sie Ihren Namen ein" required>

            <label for="email">E-Mail-Adresse</label>
            <input type="email" id="email" name="email" placeholder="Geben Sie Ihre E-Mail ein" required>

            <label for="message">Nachricht</label>
            <textarea id="message" name="message" placeholder="Geben Sie Ihre Nachricht ein" required></textarea>

            <button type="submit">Nachricht senden</button>
        </form>
        <div class="info">
            <p>Alternativ können Sie uns unter <strong>kontakt@carsharing.de</strong> erreichen.</p>
            <p>Telefon: <strong>+49 123 456 789</strong></p>
        </div>
    </div>
</body>
</html>

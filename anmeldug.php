<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldung</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 400px;
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

        input {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
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

        .link {
            text-align: center;
            margin-top: 10px;
        }

        .link a {
            color: #ff5f00;
            text-decoration: none;
        }

        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Anmeldung</h1>
        <form action="process_login.php" method="POST">
            <label for="email">E-Mail-Adresse</label>
            <input type="email" id="email" name="email" placeholder="Geben Sie Ihre E-Mail ein" required>

            <label for="password">Passwort</label>
            <input type="password" id="password" name="password" placeholder="Geben Sie Ihr Passwort ein" required>

            <button type="submit">Anmelden</button>
        </form>
        <div class="link">
            <p>Noch kein Konto? <a href="register.php">Registrieren</a></p>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Basic page styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f9f9f9;
        }

        /* Container for the login form */
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Form title */
        h1 {
            text-align: center;
            color: #333;
        }

        /* Form styling */
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* Input label styling */
        label {
            font-weight: bold;
            color: #555;
        }

        /* Input field styling */
        .login-input {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Login button styling */
        .login-btn {
            background-color:rgb(255, 0, 43);
            color: white;
            padding: 10px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Hover effect for the login button */
        .login-btn:hover {
            background-color:rgb(255, 0, 43);
        }

        /* Registration link styling */
        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color:rgb(255, 0, 43);
            text-decoration: none;
        }

        /* Underline the link on hover */
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Main container for the login form -->
    <div class="login-container">
        <h1>Anmeldung</h1>
        
        <!-- Login form sending data via POST to process_login.php -->
        <form class="login-form" action="process_login.php" method="POST">
            
            <!-- Input field for email -->
            <label for="email">E-Mail-Adresse</label>
            <input type="email" id="email" name="email" class="login-input" placeholder="Geben Sie Ihre E-Mail ein" required>

            <!-- Input field for password -->
            <label for="password">Passwort</label>
            <input type="password" id="password" name="password" class="login-input" placeholder="Geben Sie Ihr Passwort ein" required>

            <!-- Submit button -->
            <button type="submit" class="login-btn">Anmelden</button>
        </form>
        
        <!-- Link to registration page for users without an account -->
        <div class="register-link">
            <p>Noch kein Konto? <a href="register.php">Registrieren</a></p>
        </div>
    </div>
</body>
</html>
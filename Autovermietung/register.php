<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        /* Basic page styles */
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

        /* Container for the registration form */
        .registration-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Form title */
        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        /* Form group styling */
        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }

        /* Input label styling */
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Input field styling */
        .registration-input {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Register button styling */
        .register-btn {
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

        /* Hover effect for the button */
        .register-btn:hover {
            background-color: #e25400;
        }
    </style>
</head>
<body>
    <!-- Container for the registration form -->
    <div class="registration-container">
        <h1>Registrierung</h1>
        
        <!-- Registration form -->
        <form action="register_process.php" method="POST">
            
            <!-- Input field: First name -->
            <div class="form-group">
                <label for="first-name">Vorname</label>
                <input type="text" id="first-name" name="first_name" class="registration-input" required>
            </div>
            
            <!-- Input field: Last name -->
            <div class="form-group">
                <label for="last-name">Nachname</label>
                <input type="text" id="last-name" name="last_name" class="registration-input" required>
            </div>
            
            <!-- Input field: Email -->
            <div class="form-group">
                <label for="email">E-Mail-Adresse</label>
                <input type="email" id="email" name="email" class="registration-input" required>
            </div>
            
            <!-- Input field: Password -->
            <div class="form-group">
                <label for="password">Passwort</label>
                <input type="password" id="password" name="password" class="registration-input" required>
            </div>
            
            <!-- Input field: Confirm Password -->
            <div class="form-group">
                <label for="confirm-password">Passwort bestätigen</label>
                <input type="password" id="confirm-password" name="confirm_password" class="registration-input" required>
            </div>
            
            <!-- Register button -->
            <button type="submit" class="register-btn">Registrieren</button>
        </form>
    </div>
</body>
</html>
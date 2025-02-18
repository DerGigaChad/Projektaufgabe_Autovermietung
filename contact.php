<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        /* Container for the contact form */
        .contact-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Input fields and text area */
        .contact-input, .contact-textarea, .contact-btn {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        /* Adjusting message text area */
        .contact-textarea {
            resize: none;
            height: 100px;
        }

        /* Submit button */
        .contact-btn {
            background-color:rgb(255, 0, 43);
            color: white;
            border: none;
            cursor: pointer;
        }

        .contact-btn:hover {
            background-color:rgb(255, 0, 43);
        }

        /* Contact information */
        .contact-info {
            margin-top: 15px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="contact-container">
        <h1>Kontakt</h1>
        
        <!-- Contact form -->
        <form action="process_contact.php" method="POST">
            <input type="text" name="name" class="contact-input" placeholder="Ihr Name" required>
            <input type="email" name="email" class="contact-input" placeholder="Ihre E-Mail" required>
            <textarea name="message" class="contact-textarea" placeholder="Ihre Nachricht" required></textarea>
            <button type="submit" class="contact-btn">Nachricht senden</button>
        </form>
        
        <!-- Contact information -->
        <div class="contact-info">
            <p>Alternativ: <strong>kontakt@carsharing.de</strong></p>
            <p>Telefon: <strong>+49 123 456 789</strong></p>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoverleih Footer</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            position: relative;
        }
        .footer a {
            color: rgb(208, 167, 65);
            text-decoration: none;
            margin: 0 10px;
            font-size: 14px;
        }
        .app-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-left: auto;
        }
        .app-buttons img {
            height: 30px;
            margin-right: 10px;
        }
        .footer p {
            margin: 10px 0 0;
            font-size: 12px;
        }
        .social-icons img {
            width: 20px;
            height: 20px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="footer-links">
            <a href="impressum.php">Impressum</a>
            <a href="daten.php">Datenschutzbestimmungen</a>
            <a href="agb.php">AGB</a>
        </div>
        <div class="footer-right">
            <div class="social-icons">
                <a href="https://www.facebook.com/" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Facebook_icon.svg" alt="Facebook" style="width: 30px; height: 30px; margin: 5px;">
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" style="width: 30px; height: 30px; margin: 5px;">
                </a>
                <a href="https://www.linkedin.com/" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e9/Linkedin_icon.svg" alt="LinkedIn" style="width: 30px; height: 30px; margin: 5px;">
                </a>
            </div>
        </div>
        <div class="footer-section">
            <div class="app-buttons">
                <a href="https://www.apple.com/app-store/" target="_blank">
                    <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="Download on the App Store">
                </a>
                <a href="https://play.google.com/store" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Get it on Google Play">
                </a>
            </div>
        </div>
        <p>&copy; <?php echo date("Y"); ?> Autoverleih. Alle Rechte vorbehalten.</p>
    </footer>
</body>
</html>

<?php
// Dynamische Navigation für die Website
function renderHeader() {
    $menuItems = [
        'Startseite' => 'index.php',
        'Anmeldung/Registrierung' => 'login.php',
        'Meine Buchung' => 'manage_booking.php',
        'Kontakt' => 'contact.php'
    ];
    ?>
    <!DOCTYPE html>
    <html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Header</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            header {
                background-color: #ff5f00;
                color: white;
                padding: 15px 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .logo {
                font-size: 1.5rem;
                font-weight: bold;
            }

            nav {
                display: flex;
                gap: 15px;
            }

            nav a {
                color: white;
                text-decoration: none;
                font-size: 1rem;
                padding: 5px 10px;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }

            nav a:hover {
                background-color: rgba(255, 255, 255, 0.2);
            }

            .button {
                display: inline-block;
                background-color: #ff5f00;
                color: white;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                font-size: 1rem;
                border-radius: 5px;
                transition: background-color 0.3s ease;
                margin-top: 20px;
            }

            .button:hover {
                background-color: #e25400;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="logo">Car Rental Service</div>
            <nav>
                <?php foreach ($menuItems as $name => $link): ?>
                    <a href="<?php echo $link; ?>"><?php echo $name; ?></a>
                <?php endforeach; ?>
            </nav>
        </header>

        
    </body>
    </html>
    <?php
}

// Header ausgeben
renderHeader();
?>

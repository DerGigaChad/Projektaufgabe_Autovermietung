<!DOCTYPE html>
<html>
    <body>
        <?php

// HTML-Header
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '    <meta charset="UTF-8">';
echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '    <title>Autoverleih Footer</title>';
echo '    <style>';
echo '        body {';
echo '            margin: 0;';
echo '            font-family: Arial, sans-serif;';
echo '        }';
echo '        .footer {';
echo '            background-color: #333;';
echo '            color: #fff;';
echo '            padding: 20px 0;';
echo '            display: flex;';
echo '            justify-content: center;';
echo '            align-items: center;';
echo '            flex-direction: column;';
echo '        }';
echo '        .footer a {';
echo '            color: #ffa500;';
echo '            text-decoration: none;';
echo '            margin: 0 10px;';
echo '            font-size: 14px;';
echo '        }';
echo '        .footer a:hover {';
echo '            text-decoration: underline;';
echo '        }';
echo '        .footer p {';
echo '            margin: 10px 0 0;';
echo '            font-size: 12px;';
echo '        }';
echo '        .footer-links {';
echo '            margin-bottom: 10px;';
echo '        }';
echo '    </style>';
echo '</head>';
echo '<body>';
        // Footer-Bereich
echo '<footer class="footer">';
echo '    <div class="footer-links">';
echo '        <a href="impressum.php">Impressum</a>';
echo '        <a href="daten.php">Datenschutzbestimmungen</a>';
echo '        <a href="agb.php">AGB</a>';
echo '    </div>';
echo '    <p>&copy; ' . date("Y") . ' Autoverleih. Alle Rechte vorbehalten.</p>';
echo '</footer>';

echo '</body>';
echo '</html>';
         ?>
         </body>
     </html>
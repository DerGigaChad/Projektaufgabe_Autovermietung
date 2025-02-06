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
echo '            flex-direction: column;'; /* all info or buttons show up in column*/ 
echo '            position: relative;';
echo '        }';

echo '        .footer a {';
echo '            color: #ffa500;';
echo '            text-decoration: none;';
echo '            margin: 0 10px;';
echo '            font-size: 14px;';
echo '        }';

echo '         .app-buttons {';
    echo '            display: flex;';
    echo' justify-content: flex-end;';
    echo '            gap: 10px;';
    echo'  margin-left: auto;';
    echo '        }';
    echo '        .app-buttons img {';
    echo '            height: 30px;'; /* Adjust size of download options here */
    echo '      margin-right: 10px;';
   
    echo'  }';
    
/* Margin size for Footer "Alle rechte Vorbeihalten"*/

echo '        .footer p {';
echo '            margin: 10px 0 0;';
echo '            font-size: 12px;';
echo '        }';

echo'    .social-icons img {';
 echo'  width: 20;'; /* Size of social media icons */
 echo'  height: 20px;';
echo' margin: 10px;'; /* Space between social media icons */
  echo'};';


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


 // Social-Media-Bereich
echo '<div class="footer-right">';

echo '    <div class="social-icons">';
echo '        <a href="https://www.facebook.com/" target="_blank">';
echo '            <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Facebook_icon.svg" alt="Facebook" style="width: 30px; height: 30px; margin: 5px;">';
echo '        </a>';
echo '        <a href="https://www.instagram.com/" target="_blank">';
echo '            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" style="width: 30px; height: 30px; margin: 5px;">';
echo '        </a>';
echo '        <a href="https://www.linkedin.com/" target="_blank">';
echo '            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e9/Linkedin_icon.svg" alt="LinkedIn" style="width: 30px; height: 30px; margin: 5px;">';
echo '        </a>';
echo '    </div>';
echo '</div>';



 // App-Download-Bereich
 echo '<div class="footer-section">';
 
 echo '    <div class="app-buttons">';
 echo '        <a href="https://www.apple.com/app-store/" target="_blank">';
 echo '            <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="Download on the App Store">';
 echo '        </a>';
 echo '        <a href="https://play.google.com/store" target="_blank">';
 echo '            <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Get it on Google Play">';
 echo '        </a>';
 echo '    </div>';
 echo '</div>';


echo '    <p>&copy; ' . date("Y") . ' Autoverleih. Alle Rechte vorbehalten.</p>';


echo '</footer>';

echo '</body>';
echo '</html>';
         ?>
         </body>
     </html>

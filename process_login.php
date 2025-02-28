<?php
// Stelle sicher, dass nur eine Session gestartet wird
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

ob_start(); // Buffer aktivieren, um Probleme mit Header-Weiterleitungen zu vermeiden

// Fehleranzeige aktivieren
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "car_rental");

// Prüfe, ob die Verbindung zur Datenbank erfolgreich ist
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Prüfe, ob das Formular abgeschickt wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Nutze die richtigen Spaltennamen aus der Datenbank: 'UserID', 'Name', 'Password'
    $stmt = $conn->prepare("SELECT UserID, Name, Password FROM users WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $name, $db_password);
        $stmt->fetch();

        //  Kein `password_verify()`, da die Passwörter im Klartext gespeichert sind
        if ($password === $db_password) {
            // Session-Variablen setzen
            $_SESSION["user_id"] = $user_id;
            $_SESSION["username"] = $name;

            // Automatische Weiterleitung zur Startseite
            header("Location: index.php");
            exit;
        } else {
            // Falsches Passwort → Zurück zur Login-Seite mit Fehlermeldung
            header("Location: login.php?error=wrongpassword");
            exit;
        }
    } else {
        // Benutzer nicht gefunden → Zurück zur Login-Seite mit Fehlermeldung
        header("Location: login.php?error=usernotfound");
        exit;
    }
}

$conn->close();
ob_end_flush();
?>
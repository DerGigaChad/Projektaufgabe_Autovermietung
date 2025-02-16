
<?php
session_start();

// Verbindung zur Datenbank
$conn = new mysqli("localhost", "root", "", "car_rental");

// Prüfe die Verbindung
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Prüfe, ob das Formular abgeschickt wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Hole die Benutzerdaten aus der Datenbank
    $sql = "SELECT id, username, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Überprüfe, ob der Benutzer existiert
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $username, $hashed_password);
        $stmt->fetch();

        // Debugging: Zeige das eingegebene Passwort und den gespeicherten Hash an
        echo "Eingegebenes Passwort: " . $password . "<br>";
        echo "Gespeichertes Passwort (Hash): " . $hashed_password . "<br>";

        // Passwort-Überprüfung
        if (password_verify($password, $hashed_password)) {
            $_SESSION["user_id"] = $user_id;
            $_SESSION["username"] = $username;

            // Weiterleitung zur Buchungsseite
            header("Location: booking.php");
            exit;
        } else {
            echo "<p style='color: red;'>❌ Falsches Passwort!</p>";
        }
    } else {
        echo "<p style='color: red;'>❌ Benutzer nicht gefunden!</p>";
    }
}

// Verbindung schließen
$conn->close();
?>
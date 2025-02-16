<?php
$conn = new mysqli("localhost", "root", "", "car_rental");

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Hole alle Benutzer aus der Datenbank
$sql = "SELECT id FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $user_id = $row['id'];
        $new_password = "123456"; // Neues Standardpasswort für alle
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Richtiges Passwort speichern
        $update_sql = "UPDATE users SET password = '$hashed_password' WHERE id = $user_id";
        if ($conn->query($update_sql) === TRUE) {
            echo "✅ Passwort für User-ID $user_id aktualisiert.<br>";
        } else {
            echo "❌ Fehler bei User-ID $user_id: " . $conn->error . "<br>";
        }
    }
    echo "<br>✅ Alle Passwörter erfolgreich aktualisiert!";
} else {
    echo "❌ Keine Benutzer gefunden!";
}

$conn->close();
?>
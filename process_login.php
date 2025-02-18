
<?php
session_start();

// Connect to the database
$conn = new mysqli("localhost", "root", "", "car_rental");

// Check database connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Retrieve user data from the database
    $sql = "SELECT id, username, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $username, $hashed_password);
        $stmt->fetch();

        // Debugging: Display the entered password and the stored hash
        echo "Entered password: " . $password . "<br>";
        echo "Stored password hash: " . $hashed_password . "<br>";

        // Password verification
        if (password_verify($password, $hashed_password)) {
            $_SESSION["user_id"] = $user_id;
            $_SESSION["username"] = $username;

            // Redirect to the booking page
            header("Location: booking.php");
            exit;
        } else {
            echo "<p style='color: red;'> Incorrect password!</p>";
        }
    } else {
        echo "<p style='color: red;'> User not found!</p>";
    }
}

// Close database connection
$conn->close();
?>
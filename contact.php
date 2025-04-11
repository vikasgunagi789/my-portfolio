<?php
$host = "localhost";
$user = "root";
$password = ""; // default password for XAMPP
$dbname = "portfolio_db";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data safely
    $name = $conn->real_escape_string(trim($_POST["name"] ?? ""));
    $email = $conn->real_escape_string(trim($_POST["email"] ?? ""));
    $phone = $conn->real_escape_string(trim($_POST["phone"] ?? ""));
    $subject = $conn->real_escape_string(trim($_POST["subject"] ?? ""));
    $message = $conn->real_escape_string(trim($_POST["message"] ?? ""));

    if (empty($name) || empty($email) || empty($message)) {
        echo "<h3 style='color:red;'>Please fill in all required fields.</h3>";
    } else {
        // Insert into database
        $sql = "INSERT INTO messages (name, email, phone, subject, message) 
                VALUES ('$name', '$email', '$phone', '$subject', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "<h3 style='color:green;'>Thank you $name, your message has been saved.</h3>";
        } else {
            echo "<h3 style='color:red;'>Error: " . $conn->error . "</h3>";
        }
    }
}

$conn->close();
?>

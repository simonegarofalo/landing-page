<?php
session_start();
// Configure the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "landing-page";

// Create a connession
$conn = new mysqli($servername, $username, $password, $dbname);

// Connection check
if ($conn->connect_error) {
    exit("Connection failed: " . $conn->connect_error);
}

// Get the form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$trattamentodati = isset($_POST['trattamentodati']) ? 1 : 0;


$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, trattamentodati) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $firstname, $lastname, $email, $trattamentodati);

if ($stmt->execute()) {
    $_SESSION['username'] = $firstname;

    header("Location: newsletter-page.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$name = $_POST["name"];
$guests = $_POST["noof_guests"];
$checkin = $_POST["checkin"];
$checkout = $_POST["checkout"];

// Insert data into the database
$sql = "INSERT INTO reservation (name, noof_guests, checkin, checkout)
VALUES ('$name', '$guests', '$checkin', '$checkout')";

if ($conn->query($sql) === TRUE) {
    echo "Reservation created successfully";
    header("Location: ./index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php
// Replace with your actual database connection details
$servername = "localhost";
$username = "sirat";
$password = "000999";
$dbname = "i-Broker";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     $username = $_POST["username"];
//     $password = $_POST["password"]; // Note: You should hash and salt passwords in a real scenario

//     $sql = "SELECT id FROM users WHERE username = '$username' AND password = '$password'";
//     $result = $conn->query($sql);

//     if ($result->num_rows === 1) {
//         // Successful login
//         echo "Login successful!";
//     } else {
//         echo "Login failed. Please check your username and password.";
//     }
// }

// $conn->close();
?>

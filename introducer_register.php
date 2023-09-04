<?php

$servername = "localhost";
$username = "sirat";
$password = "000999";
$dbname = "i-broker";

// Creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST["id"];
    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $occupation = $_POST["occupation"];
    $email = $_POST["email"];

    $sql = "INSERT INTO Intoducer_T VALUES('$id', '$name', '$contact', '$email', '$occupation')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully!";
        header('Location: power_of_atorny_signup.html');
    } else {
        echo "Error updating data: " . $conn->error;
    }
}

$conn->close();
?>

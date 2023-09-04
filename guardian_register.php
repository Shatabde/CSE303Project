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

    $nid1 = $_POST["nid1"];
    $nid2 = $_POST["nid2"];
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $mobile = $_POST["mobile"];

    $sql = "INSERT INTO minor_guardian_t VALUES('$nid2', '$name', '$dob', '$mobile', '$address', '$nid1'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully!";
        header('Location: introducer_signup.html')
    } else {
        echo "Error updating data: " . $conn->error;
    }
}

$conn->close();
?>

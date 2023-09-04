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

    $bank_code = $_POST["bank_code"];
    $bank_branch_code = $_POST["bank_branch_code"];
    $routing_no = $_POST["routing_no"];
    $bank_account_no = $_POST["bank_account_no"];

    $sql = "INSERT INTO  bank_t VALUES('$bank_code', '$bank_branch_code', '$routing_no', '$bank_account_no')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully!";
        header('Location: add_client_photo.html');
    } else {
        echo "Error updating data: " . $conn->error;
    }
}

$conn->close();
?>

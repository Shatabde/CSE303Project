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

    $nid = $_POST["nid"];
    $title = $_POST["title"];
    $name = $_POST["name"];
    $fathers_name = $_POST["fathers_name"];
    $mothers_name = $_POST["mothers_name"];
    $spouse_name = $_POST["spouse_name"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $nationality = $_POST["nationality"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $post = $_POST["post"];
    $thana = $_POST["thana"];
    $division = $_POST["division"];
    $country = $_POST["country"];
    $mobile = $_POST["mobile"];
    $occupation = $_POST["occupation"];
    $email = $_POST["email"];
    $etin = $_POST["etin"];
    $ppno = $_POST["ppno"];

    $sql = "INSERT INTO  joint_account_t VALUES('$nid', '$name', '$title','$fathers_name', '$mothers_name', '$spouse_name', '$dob', '$gender', '$nationality', '$address', '$city', '$post', '$thana', '$division', '$country', '$mobile', '$occupation', '$email', '$etin', '$ppno')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully!";
        header('Location: nominee_signup.html')
    } else {
        echo "Error updating data: " . $conn->error;
    }
}

$conn->close();
?>

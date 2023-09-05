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
    $name = $_POST["name"];
    $fathers_name = $_POST["fathers_name"];
    $spouse_name = $_POST["spouse_name"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $occupation = $_POST["occupation"];
    $nationality = $_POST["nationality"];
    $present_address = $_POST["present_address"];
    $permanent_address = $_POST["permanent_address"];
    $mobile = $_POST["mobile"];
    $tel = $_POST["tel"];
    $etin = $_POST["etin"];
    $email = $_POST["email"];
    $type = $_POST["type"];

    $uploadOk = 1;
    $photo1_name = $_FILES["photo1"]["name"];
    $photo1_tmp = $_FILES["photo1"]["tmp_name"];
    $photo1_path = "uploads/" . $photo1_name;
    move_uploaded_file($photo1_tmp, $photo1_path);

    // Handle photo 2 upload
    $photo2_name = $_FILES["photo2"]["name"];
    $photo2_tmp = $_FILES["photo2"]["tmp_name"];
    $photo2_path = "uploads/" . $photo2_name;
    move_uploaded_file($photo2_tmp, $photo2_path);


    $sql = "INSERT INTO  authorised_person_t VALUES('$nid', '$name', '$fathers_name', '$spouse_name', '$dob', '$nationality', '$present_address', '$permanent_address', '$occupation', '$mobile', '$tel', '$email', '$etin', '$ppno', '$type', '$photo1_path', '$photo2_path')";
    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully!";
        header('Location: nominee_signup.html')
    }
    else {
        echo "Error updating data: " . $conn->error;
    }
}

$conn->close();
?>

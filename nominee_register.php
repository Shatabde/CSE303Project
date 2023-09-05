<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "i-broker";

// Creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $n_nid = $_POST["nid"];
    $n_name = $_POST["name"];
    $n_dob = $_POST["dob"];
    $n_gender = $_POST["gender"];
    $n_nationality = $_POST["nationality"];
    $n_address = $_POST["address"];
    $n_city = $_POST["city"];
    $n_post = $_POST["post"];
    $n_state = $_POST["state"];
    $n_division = $_POST["division"];
    $n_mobile = $_POST["mobile"];
    $nom_relation_with_client = $_POST["nom_relation_with_client"];
    $n_percentage = $_POST["percentage"];
    $n_ppno = $_POST["ppno"];


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

    $sql = "INSERT INTO Nominee_T VALUES(
    '$n_nid',
    '$n_name',
    '$n_dob',
    '$n_gender',
    '$n_nationality',
    '$n_address', 
    '$n_city', 
    '$n_post', 
    '$n_state', 
    '$n_division',
    '$n_mobile', 
    '$nom_relation_with_client', 
    '$n_percentage', 
    '$n_ppno',
    '$photo1_path',
    '$photo2_path')";


    
    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully!";
        if ((date('Y-m-d H:i:s') - $n_dob) < 18) {
            header('Location: guardian_signup.html');
        }
        else {
            header('Location: introducer_signup.html');
        }
    } else {
        echo "Error updating data: " . $conn->error;
    }
}

$conn->close();
?>

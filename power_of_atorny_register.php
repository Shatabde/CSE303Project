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

    $p_nid = $_POST["nid"];
    $p_ppno = $_POST["ppno"];
    $p_title = $_POST["title"];
    $p_name = $_POST["name"];
    $p_dob = $_POST["dob"];
    $p_nationality = $_POST["nationality"];
    $p_address = $_POST["address"];
    $p_city = $_POST["city"];
    $p_post = $_POST["post"];
    $p_state = $_POST["state"];
    $p_division = $_POST["division"];
    $p_country = $_POST["country"];
    $p_mobile = $_POST["mobile"];
    $p_tel = $_POST["tele"];
    $p_fax = $_POST["fax"];
    $p_email = $_POST["email"];

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

    $sql = "INSERT INTO  power_of_atorny_t VALUES('$p_nid', '$p_title', '$p_name','$p_dob','$p_nationality', '$p_address', '$p_city', '$p_post', '$p_state', '$p_division', '$p_country', '$p_mobile', '$p_tel', '$p_email', '$p_fax', '$p_ppno', '$photo1_path', '$photo2_path')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully!";
        header('Location: bank_signup.html');
    } else {
        echo "Error updating data: " . $conn->error;
    }
}

$conn->close();
?>

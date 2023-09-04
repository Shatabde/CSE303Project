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
    $husbands_name = $_POST["husbands_name"];
    $mothers_name = $_POST["mothers_name"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $nationality = $_POST["nationality"];
    $present_address = $_POST["present_address"];
    $present_city = $_POST["present_city"];
    $present_post = $_POST["present_post"];
    $present_thana = $_POST["present_thana"];
    $present_division = $_POST["present_division"];
    $present_country = $_POST["present_country"];
    $permanent_address = $_POST["permanent_address"];
    $permanent_city = $_POST["permanent_city"];
    $permanent_post = $_POST["permanent_post"];
    $permanent_thana = $_POST["permanent_thana"];
    $permanent_division = $_POST["permanent_division"];
    $permanent_country = $_POST["permanent_country"];
    $mobile = $_POST["mobile"];
    $tel = $_POST["tel"];
    $occupation = $_POST["occupation"];
    $email = $_POST["email"];
    $etin = $_POST["etin"];
    $ppno = $_POST["ppno"];
    $type = $_POST["type"];

    $sql = "INSERT INTO client_t(c_nid, c_title, c_name, c_father_name, c_spouse_name, c_mother_name, c_dob, c_gender, c_nationality, c_present_address, c_present_city, c_present_post, c_present_thana, c_present_division, c_present_country, c_permanent_address, c_permanent_city, c_permanent_post, c_permanent_thana, c_permanent_division, c_permanent_country, c_mobile, c_tel, c_occupation, c_email, c_etin, c_ppno, c_account_type) VALUES('$nid', '$title', '$name', '$fathers_name', '$husbands_name', '$mothers_name', '$dob', '$gender', '$nationality', '$present_address', '$present_city', '$present_post', '$present_thana', '$present_division', '$present_country', '$permanent_address', '$permanent_city', '$permanent_post', '$permanent_thana', '$permanent_division', '$permanent_country', '$mobile', '$tel', '$occupation', '$email', '$etin', '$ppno', '$type')";

    if ($type == "Joint" || $type == "joint") {
        header('Location: joint_signup.html');
    }
    elseif ($type == "Corporate" || $type == "corporate") {
        header('Location: authorised_person_signup.html');
    }

    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully!";
        header('Location: nominee_signup.html');
    }
    else {
        echo "Error updating data: " . $conn->error;
    }
}

$conn->close();
?>

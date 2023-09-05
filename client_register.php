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

    // $url = "client_photo_upload.php" .urlencode($nid);
    // header("Location: " . $url);






    // $targetDirectory = "uploads/";
    // $targetFile1 = $targetDirectory . basename($_FILES["photo1"]["name"]);
    // $uploadOk = 1;
    // $imageFileType1 = strtolower(pathinfo($targetFile1, PATHINFO_EXTENSION));

    // $targetDirectory = "uploads/";
    // $targetFile2 = $targetDirectory . basename($_FILES["photo2"]["name"]);
    // $uploadOk = 1;
    // $imageFileType2 = strtolower(pathinfo($targetFile2, PATHINFO_EXTENSION));





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

    $sql = "INSERT INTO client_t VALUES('$nid', '$title', '$name', '$fathers_name', '$husbands_name', '$mothers_name', '$dob', '$gender', '$nationality', '$present_address', '$present_city', '$present_post', '$present_thana', '$present_division', '$present_country', '$permanent_address', '$permanent_city', '$permanent_post', '$permanent_thana', '$permanent_division', '$permanent_country', '$mobile', '$tel', '$occupation', '$email', '$etin', '$ppno', '$type', '$photo1_path', '$photo2_path')";

    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully!";
        header('Location: nominee_signup.html');
    }
    else {
        echo "Error updating data: " . $conn->error;
    }

    if ($type == "Joint" || $type == "joint") {
        header('Location: joint_signup.html');
    }
    elseif ($type == "Corporate" || $type == "corporate") {
        header('Location: authorised_person_signup.html');
    }

}

$conn->close();
?>

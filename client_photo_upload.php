<?php
// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "i-broker";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // File upload handling
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size (adjust as needed)
    if ($_FILES["photo"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats (you can customize)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // If everything is okay, try to upload file
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile.$_FILES['photo']['name'])) {
            // Insert the file path into the database
            $sql = "INSERT INTO Client_T (c_photo) VALUES ('$targetFile')";

            if ($conn->query($sql) === true) {
                echo "File uploaded successfully.";
                header('Location: add_client_sig.html');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Close database connection
    $conn->close();
}
?>

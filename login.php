<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "i-broker";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nid = $_POST["nid"];
    $name = $_POST["name"];
    $user_type = $_POST["user_type"];

    if ($user_type === "Client") {
        $sql = "SELECT c_NID, c_name FROM client_t WHERE c_NID = '$nid' AND c_name = '$name'";
        $result = $conn->query($sql);

        if ($result->num_rows === 1) {

            echo "Login successful!";
            echo "<h1>Welcome $name</h1>";
        
        } else {
            echo "Login failed. Please check your username and password.";
        }
    }

    elseif ($user_type === "Customer Relationship Manager") {
        $sql = "SELECT c_r_m_id, c_r_m_name FROM customer_relation_manager_t WHERE c_r_m_id = '$nid' AND c_r_m_name = '$name'";
        $result = $conn->query($sql);

        if ($result->num_rows === 1) {

            echo "Login successful!";
            echo "<h1>Welcome $name</h1>";
        
        } else {
            echo "Login failed. Please check your username and password.";
        }
    }

    elseif ($user_type === "Head Of Settlement") {
        $sql = "SELECT h_s_id, h_s_name FROM head_of_sattelment_t WHERE h_s_id = '$nid' AND h_s_name = '$name'";
        $result = $conn->query($sql);

        if ($result->num_rows === 1) {

            echo "Login successful!";
            echo "<h1>Welcome $name</h1>";
        
        } else {
            echo "Login failed. Please check your username and password.";
        }
    }
    // $sql = "SELECT c_NID, c_name FROM client_t WHERE c_NID = '$nid' AND c_name = '$name'";
    // $result = $conn->query($sql);

    // if ($result->num_rows === 1) {

    //     echo "Login successful!";
    //     echo "<h1>Welcome $name</h1>";
        
    // } else {
    //     echo "Login failed. Please check your username and password.";
    // }
}

$conn->close();
?>

<?php
$servername = "localhost";
$username = "sirat";
$password = "000999";
$dbname = "i-broker";

// Creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT COUNT(*) AS Total FROM Client_T WHERE c_present_division = 'Dhaka'";
$result = $conn->query($query);

$labels = [];
$values = [];

while ($row = $result->fetch_assoc()) {
    // $labels[] = $row['Total'];
    $values[] = $row['Total'];
}

$chart_data = [
    'labels' => json_encode($labels),
    'values' => json_encode($values),
];

?>
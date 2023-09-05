<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "i-broker";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$query = "SELECT c_gender, COUNT(*) AS client_count FROM client_t GROUP BY c_gender;";
$result = $conn->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Close the database connection
$conn->close();

// Convert data to JSON format
$json_data = json_encode($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Male and Female Bo Account Holders</title>
    <!-- Include Google Charts library -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Division Name');
            data.addColumn('number', 'Bo Account Holders');

            var jsonData = <?php echo $json_data; ?>;
            jsonData.forEach(function (row) {
                data.addRow([row.c_present_division, parseFloat(row.client_count)]);
            });

            var options = {
                title: 'Male and Female Account Holders',
                chartArea: {width: '50%'},
                hAxis: {
                    title: 'Account Holders',
                    minValue: 0
                },
                vAxis: {
                    title: 'Gender'
                }
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="chart_div" style="width: 800px; height: 400px;"></div>
</body>
</html>

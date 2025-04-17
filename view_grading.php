<?php
$connection = new mysqli("localhost", "root", "", "agriculture_system");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$result = $connection->query("SELECT * FROM grading");

echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Crop Name</th>
    <th>Grade</th>
    <th>Inspector</th>
    <th>Quality Report</th>
    <th>Date</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['crop_name']}</td>
        <td>{$row['grade']}</td>
        <td>{$row['inspector']}</td>
        <td>{$row['quality_report']}</td>
        <td>{$row['date']}</td>
    </tr>";
}

echo "</table>";

$connection->close();
?>

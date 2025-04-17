<?php
$connection = new mysqli("localhost", "root", "", "agriculture_system");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$crop_name = $_POST['crop_name'];
$grade = $_POST['grade'];
$inspector = $_POST['inspector'];
$quality_report = $_POST['quality_report'];

$sql = "INSERT INTO grading (crop_name, grade, inspector, quality_report) 
        VALUES ('$crop_name', '$grade', '$inspector', '$quality_report')";

if ($connection->query($sql) === TRUE) {
    echo "Grading submitted successfully!";
} else {
    echo "Error: " . $connection->error;
}

$connection->close();
?>

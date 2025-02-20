<?php
$server_name = 'localhost';
$username = 'root';
$password = '';
$db_name = 'student_information_db';

$conn = new mysqli($server_name, $username, $password, $db_name);

if ($conn->connect_error) {
    die("No Connection: " . mysqli_connect_error());
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$contact_num = $_POST['contact_num'];
$course = $_POST['course'];

$sql = "INSERT INTO students (first_name, last_name, address, contact_num, course) VALUES ('$first_name','$last_name','$address','$contact_num','$course')";

if ($conn->query($sql) === TRUE) {
    echo "Registered";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
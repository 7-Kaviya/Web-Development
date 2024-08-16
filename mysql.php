<?php
// Database connection
$servername = "localhost";
$username = "username";

$password = "RDseven7";
$dbname = "dbname";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Fetching form data using POST method
$regno = $_POST['regno'];
$name = $_POST['name'];
$dept = $_POST['dept'];
$year = $_POST['year'];
// SQL query to insert data into database
$sql = "INSERT INTO students (regno, name, dept, year)
VALUES ('$regno', '$name', '$dept', '$year')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
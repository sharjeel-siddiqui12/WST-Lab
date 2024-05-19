<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "sharjeel";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "<script>alert('Database connection failed');</script>";
}

echo "<script>alert('Connected to database successfully');</script>";

?>

<?php include "conn.php"?>
<?php

$sql = "INSERT INTO users (username, email, age) VALUES
        ('sharjeel', 'sharjeel@example.com', 30),
        ('ghaffar', 'ghaffar@example.com', 25),
        ('jawad', 'jawad@example.com', 35),
        ('moten', 'moten@example.com', 35)";

if ($conn->query($sql) === TRUE) {
    echo "Records inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

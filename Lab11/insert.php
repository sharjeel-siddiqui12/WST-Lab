<?php include "conn.php" ?>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$sql = "INSERT INTO `userdata` (`name`,`email`) VALUES ('$name','$email')";
if ($conn->query($sql) === TRUE) {
    echo "Records inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
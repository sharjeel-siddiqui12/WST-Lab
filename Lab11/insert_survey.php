<?php include "conn.php"?>
<?php
$name =$_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$role = $_POST['role'];
$language = $_POST['language'];
$language1 = implode(",",$language);
$comment = $_POST['comment'];

$sql="INSERT INTO `survey` (`name`,`email`,`age`,`role`,`language`,`comment`) VALUES ('$name','$email','$age','$role','$language1','$comment')";
if ($conn->query($sql) === TRUE) {
    echo "Records inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
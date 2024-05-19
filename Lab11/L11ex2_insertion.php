<?php include "conn.php"?>
    <?php
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_POST['submit'])) {
        $emp_name = $_POST['emp_name'];
        $father_name = $_POST['father_name'];
        $emp_designation = $_POST['emp_designation'];
        $emp_salary = $_POST['emp_salary'];
        $emp_organization = $_POST['emp_organization'];

        $sql = "INSERT INTO employee (emp_name, father_name, emp_designation, emp_salary, emp_organization) VALUES ('$emp_name', '$father_name', '$emp_designation', '$emp_salary', '$emp_organization')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Records</title>
    <link rel="stylesheet" href="css/display.css">
</head>
<body>
    <h2>Employee Records</h2>
    <table border="1">
        <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Father's Name</th>
            <th>Designation</th>
            <th>Salary</th>
            <th>Organization</th>
        </tr>

        <?php include "conn.php"?>
        <?php

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM employee";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['emp_id'] . "</td>";
                echo "<td>" . $row['emp_name'] . "</td>";
                echo "<td>" . $row['father_name'] . "</td>";
                echo "<td>" . $row['emp_designation'] . "</td>";
                echo "<td>" . $row['emp_salary'] . "</td>";
                echo "<td>" . $row['emp_organization'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>

<?php
$name = $_POST['name'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$email = $_POST['email'];

$errors = array();

if (empty($name)) {
    $errors[] = "Name is a compulsory field.";
}

if (!preg_match('/^[0-9]{6}$/', $pincode)) {
    $errors[] = "Pincode must be 6 digits.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
    <link rel="stylesheet" href="L10ex1.css">
</head>
<body>
<?php
if (!empty($errors)) {
    echo "<div class='error-container'>";
    echo "<h2>Errors:</h2>";
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
    echo "</div>";
} else {
    echo "<div class='success-container'>";
    echo "<h2>Success!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>City:</strong> $city</p>";
    echo "<p><strong>Pincode:</strong> $pincode</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "</div>";
}
?>
</body>
</html>

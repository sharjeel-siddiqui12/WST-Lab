<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/l9ex2.css">
    <title>Exercise 2</title>
</head>
<body>

<?php
// Function to sort an array using Bubble sort
function bubbleSort(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap arr[j] and arr[j+1]
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

// Initialize variables
$num = 0; // Changed variable name to "num"
$list = [];

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Take user input for the number of elements
    $num = isset($_POST['num']) ? $_POST['num'] : 0; // Changed variable name to "num"

    // Take user input for the list of elements
    for ($i = 0; $i < $num; $i++) { // Changed variable name to "num"
        $list[] = isset($_POST["element$i"]) ? $_POST["element$i"] : null;
    }

    // Call the bubbleSort function to sort the list
    bubbleSort($list);
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Enter the number of elements: <input type="number" name="num" value="<?php echo $num; ?>"><br> <!-- Changed variable name to "num" -->
    <?php
    // Generate form fields for the list of elements based on the entered number
    for ($i = 0; $i < $num; $i++) { // Changed variable name to "num"
        $value = isset($list[$i]) ? $list[$i] : '';
        echo 'Element ' . ($i + 1) . ': <input type="text" name="element' . $i . '" value="' . $value . '"><br>';
    }
    ?>
    <input type="submit" value="Sort">
</form>

<?php

if ($num > 0) { // Changed variable name to "num"
    echo "<div class='sorted-list-container'>";
    echo "<div class='sorted-list'>";
    echo "<strong>Sorted list:</strong><br>";
    foreach ($list as $element) {
        echo $element . " ";
    }
    echo "</div>";
    echo "</div>";
}
?>

</body>
</html>

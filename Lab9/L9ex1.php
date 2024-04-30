<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/l9ex1.css">
    <title>Exercise 1</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Enter numbers separated by spaces: <input type="text" name="numbers"><br>
    Enter a string: <input type="text" name="string"><br>
    <input type="submit">
</form>

<?php
// Function to calculate the average and median of an array of numbers
function calculateAverageAndMedian($numbers) {
    $count = count($numbers);
    $sum = array_sum($numbers);
    
    // Calculate average
    $average = $sum / $count;
    
    // Calculate median
    sort($numbers);
    $median = $count % 2 == 0 ? ($numbers[$count/2 - 1] + $numbers[$count/2]) / 2 : $numbers[($count-1)/2];
    
    return array('average' => $average, 'median' => $median);
}

// Function to calculate the length of a string
function calculateStringLength($string) {
    return strlen($string);
}

// Function to reverse a string
function reverseString($string) {
    return strrev($string);
}

// Function to check if a string is a palindrome
function isPalindrome($string) {
    $string = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $string)); // Remove non-alphanumeric characters and convert to lowercase
    $reverse = strrev($string);
    
    return $string == $reverse;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process numbers input
    if (!empty($_POST["numbers"])) {
        $numbers = explode(' ', $_POST["numbers"]);
        $numbers = array_map('intval', $numbers);
        $average_median = calculateAverageAndMedian($numbers);
        echo "<div class='result-container'>";
        echo "<div class='result'>Average: " . $average_median['average'] . ", Median: " . $average_median['median'] . "</div>";
        echo "</div>";
    }
    
    // Process string input
    if (!empty($_POST["string"])) {
        $string = $_POST["string"];
        echo "<div class='result-container'>";
        echo "<div class='result'>Length of string: " . calculateStringLength($string) . "</div>";
        echo "<div class='result'>Reverse of string: " . reverseString($string) . "</div>";
        echo "<div class='result'>Is \"$string\" a palindrome? " . (isPalindrome($string) ? "Yes" : "No") . "</div>";
        echo "</div>";
    }
}
?>

</body>
</html>

<?php
// Function to calculate factorial
function factorial($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

// Calculate factorial of a predefined number
$number = 10; // Change this to any number you want to calculate the factorial for
$result = factorial($number);
echo "Factorial of $number is $result.";
?>

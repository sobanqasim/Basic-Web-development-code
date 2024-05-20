<?php
// Function to find the maximum number in an array
function findMax($arr) {
    $max = $arr[0];
    foreach ($arr as $num) {
        if ($num > $max) {
            $max = $num;
        }
    }
    return $max;
}

// Function to check if a number is prime
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

// Function to calculate factorial of a number
function factorial($num) {
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

// Taking input from user to initialize the array
echo "Enter the size of the array: ";
$size = intval(trim(fgets(STDIN)));
$arr = array();
for ($i = 0; $i < $size; $i++) {
    echo "Enter element $i: ";
    $arr[] = intval(trim(fgets(STDIN)));
}

// Finding the maximum number
$max = findMax($arr);
echo "Maximum number in the array: $max\n";

// Taking input from user to check if a number is prime
echo "Enter a number to check if it's prime: ";
$number = intval(trim(fgets(STDIN)));
if (isPrime($number)) {
    echo "$number is prime.\n";
} else {
    echo "$number is not prime.\n";
}

// Taking input from user to calculate factorial
echo "Enter a number to calculate its factorial: ";
$number = intval(trim(fgets(STDIN)));
$fact = factorial($number);
echo "Factorial of $number is: $fact\n";
?>

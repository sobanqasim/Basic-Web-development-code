<?php
function fibonacci($n) {
    $fib = [0, 1]; // Initialize the Fibonacci sequence array with the first two numbers
    for ($i = 2; $i < $n; $i++) {
        // Add the last two numbers to generate the next number
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

// Number of terms in the Fibonacci sequence
$num_terms = 10;

// Generate the Fibonacci sequence
$fib_sequence = fibonacci($num_terms);

// Display the Fibonacci sequence
echo "Fibonacci sequence up to $num_terms terms:<br>";
foreach ($fib_sequence as $num) {
    echo $num . ", ";
}
?>

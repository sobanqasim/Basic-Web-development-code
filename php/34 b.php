<?php
// Sample array
$array = [1, 2, 3, 4, 5, 3, 6, 7, 3];

// Value to be deleted
$valueToDelete = 3;

// Iterate over the array using foreach loop
foreach ($array as $key => $value) {
    // Check if the current element matches the value to be deleted
    if ($value === $valueToDelete) {
        // Delete the element from the array
        unset($array[$key]);
    }
}

// Output the modified array
print_r($array);
?>

<?php
// Function to check if a string is a palindrome
function isPalindrome($str) {
    // Remove spaces and convert to lowercase
    $str = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str));
    // Reverse the string
    $reverse = strrev($str);
    // Check if the original string is equal to its reverse
    return $str === $reverse;
}

// Read words from the text file
$words = file('words.txt', FILE_IGNORE_NEW_LINES);

// Loop through each word and check if it is a palindrome
foreach ($words as $word) {
    if (isPalindrome($word)) {
        echo "$word is a palindrome.<br>";
    } else {
        echo "$word is not a palindrome.<br>";
    }
}
?>

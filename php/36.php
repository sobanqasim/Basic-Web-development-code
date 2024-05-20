<?php
function is_all_lowercase($str) {
    // Check if the string is empty
    if(empty($str)) {
        return false;
    }
    
    // Check if all characters in the string are lowercase
    // using ctype_lower function
    for ($i = 0; $i < strlen($str); $i++) {
        if (!ctype_lower($str[$i])) {
            return false;
        }
    }
    
    // If all characters are lowercase, return true
    return true;
}

// Test the function
$string1 = "hello";
$string2 = "Hello";
$string3 = "HELLO";

echo "Is '$string1' all lowercase? " . (is_all_lowercase($string1) ? "Yes" : "No") . "<br>";
echo "Is '$string2' all lowercase? " . (is_all_lowercase($string2) ? "Yes" : "No") . "<br>";
echo "Is '$string3' all lowercase? " . (is_all_lowercase($string3) ? "Yes" : "No") . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>
<body>
    <h2>Palindrome Checker</h2>
    <form method="POST" action="">
        <label for="userInput">Enter a string:</label>
        <input type="text" id="userInput" name="userInput">
        <button type="submit">Check</button>
    </form>
    <?php
    function isPalindrome($str) {
        // Remove spaces and convert to lowercase
        $str = strtolower(str_replace(' ', '', $str));
        // Reverse the string
        $reverseStr = strrev($str);
        // Check if the original and reversed strings are the same
        if ($str == $reverseStr) {
            return true;
        } else {
            return false;
        }
    }

    // Check if form is submitted and process the input
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userInput = $_POST['userInput'];
        // Check if the input is a palindrome
        if (isPalindrome($userInput)) {
            echo "<p>\"$userInput\" is a palindrome!</p>";
        } else {
            echo "<p>\"$userInput\" is not a palindrome!</p>";
        }
    }
    ?>
</body>
</html>

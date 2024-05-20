<!DOCTYPE html>
<html>
<head>
    <title>Count Vowels in a String</title>
</head>
<body>
    <h2>Count Vowels in a String</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter a string: <input type="text" name="inputString"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    // Function to count vowels in a string
    function countVowels($str) {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if (in_array($str[$i], $vowels)) {
                $count++;
            }
        }
        return $count;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["inputString"];

        if (!empty($inputString)) {
            $vowelCount = countVowels($inputString);
            echo "<p>The number of vowels in the string \"$inputString\" is: $vowelCount</p>";
        } else {
            echo "<p>Please enter a string.</p>";
        }
    }
    ?>
</body>
</html>

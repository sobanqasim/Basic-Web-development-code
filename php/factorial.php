<!DOCTYPE html>
<html>
<head>
    <title>Find Maximum Number, Check Prime, and Calculate Factorial</title>
</head>
<body>
    <h2>Find Maximum Number, Check Prime, and Calculate Factorial</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter the size of the array: <input type="text" name="size"><br><br>
        Enter a number to calculate its factorial: <input type="text" name="factorialNum"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $size = $_POST["size"];
        $factorialNum = $_POST["factorialNum"];

        if (!empty($size) && is_numeric($size) && $size > 0) {
            echo "<h3>Enter $size elements:</h3>";
            echo '<form method="post" action="">';
            for ($i = 0; $i < $size; $i++) {
                echo "Element $i: <input type='text' name='arr[]'><br>";
            }
            echo '<input type="submit" name="submitArr" value="Find Maximum, Check Prime, and Calculate Factorial">';
            echo '</form>';
        } else {
            echo "<p>Please enter a valid size for the array.</p>";
        }

        if (isset($_POST["submitArr"])) {
            $arr = $_POST["arr"];
            $max = findMax($arr);
            echo "<p>The maximum number in the array is: $max</p>";

            echo "<p>Prime numbers in the array:</p>";
            foreach ($arr as $num) {
                if (is_numeric($num) && isPrime($num)) {
                    echo "$num ";
                }
            }

            if (!empty($factorialNum) && is_numeric($factorialNum)) {
                $fact = factorial($factorialNum);
                echo "<p>Factorial of $factorialNum is: $fact</p>";
            } else {
                echo "<p>Please enter a valid number to calculate its factorial.</p>";
            }
        }
    }
    ?>
</body>
</html>

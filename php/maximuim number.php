<!DOCTYPE html>
<html>
<head>
    <title>Find Maximum Number</title>
</head>
<body>
    <h2>Find Maximum Number</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter the size of the array: <input type="text" name="size"><br><br>
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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $size = $_POST["size"];

        if (!empty($size) && is_numeric($size) && $size > 0) {
            echo "<h3>Enter $size elements:</h3>";
            echo '<form method="post" action="">';
            for ($i = 0; $i < $size; $i++) {
                echo "Element $i: <input type='text' name='arr[]'><br>";
            }
            echo '<input type="submit" name="submitArr" value="Find Maximum">';
            echo '</form>';
        } else {
            echo "<p>Please enter a valid size for the array.</p>";
        }

        if (isset($_POST["submitArr"])) {
            $arr = $_POST["arr"];
            $max = findMax($arr);
            echo "<p>The maximum number in the array is: $max</p>";
        }
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Calculate Square and Cube</title>
</head>
<body>

<h2>Calculate Square and Cube</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Enter a number: <input type="number" name="number">
    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    $square = $number * $number;
    $cube = $number * $number * $number;
    echo "Square of $number is: $square <br>";
    echo "Cube of $number is: $cube";
}
?>

</body>
</html>

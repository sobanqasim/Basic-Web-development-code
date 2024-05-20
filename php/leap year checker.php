<!DOCTYPE html>
<html>
<head>
    <title>Leap Year Checker</title>
</head>
<body>

<h2>Leap Year Checker</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Enter a year: <input type="number" name="year">
    <input type="submit" name="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST['year'];

    // Check if the year is divisible by 4 and not divisible by 100
    // OR if the year is divisible by 400
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "$year is a leap year.";
    } else {
        echo "$year is not a leap year.";
    }
}
?>

</body>
</html>

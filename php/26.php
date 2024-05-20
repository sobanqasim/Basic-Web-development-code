<!DOCTYPE html>
<html>
<body>
<?php
// Get the current day of the week as a number (0 for Sunday, 1 for Monday, etc.)
$currentDay = date('w');

// Convert the number to the corresponding day name
switch ($currentDay) {
    case 0:
        $dayOfWeek = "Sunday";
        break;
    case 1:
        $dayOfWeek = "Monday";
        break;
    case 2:
        $dayOfWeek = "Tuesday";
        break;
    case 3:
        $dayOfWeek = "Wednesday";
        break;
    case 4:
        $dayOfWeek = "Thursday";
        break;
    case 5:
        $dayOfWeek = "Friday";
        break;
    case 6:
        $dayOfWeek = "Saturday";
        break;
    default:
        $dayOfWeek = "Unknown";
}

// Display the current day of the week
echo "Today is $dayOfWeek.";
?>
</body>
</html>
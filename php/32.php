<?php
// Set the initial variables
$row = 1;
$maxRows = 8;

// Loop through each row
while ($row <= $maxRows) {
    // Print stars based on the current row number
    $col = 1;
    while ($col <= $row) {
        echo "*";
        $col++;
    }
    // Move to the next line after each row
    echo "<br>";
    $row++;
}
?>

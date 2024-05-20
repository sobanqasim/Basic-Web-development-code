<?php
// Using for loop
echo "Using for loop <br>";
for ($i = 5; $i <= 15; $i++) {
    echo "the number is : $i <br>";
}

// Using while loop
echo "\nUsing while loop <br>";
$count = 5;
while ($count <= 15) {
    echo "the number is : $count <br>";
    $count++;
}

// Using do-while loop
echo "\nUsing do-while loop <br>";
$count = 5;
do {
    echo "the number is : $count <br>";
    $count++;
} while ($count <= 15);
?>

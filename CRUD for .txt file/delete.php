<?php
$file = "data.txt";
if(file_exists($file)) {
    // Open the file in write mode to clear its content
    $handle = fopen($file, 'w');
    fclose($handle);
    echo "<script>alert('Text removed from file successfully!');</script>";
} else {
    echo "<script>alert('File does not exist!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Text from File</title>
</head>
<body>
<h1>View Text from File</h1>
<?php
$file = fopen("data.txt", "r");
if ($file) {
  while (($line = fgets($file)) !== false) {
    echo "<p>$line</p>";
  }
  fclose($file);
} else {
  echo "<p>No text found in file.</p>";
}
?>
</body>
</html>

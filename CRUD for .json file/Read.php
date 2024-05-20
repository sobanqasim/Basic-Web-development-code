<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Data from JSON</title>
</head>
<body>
<h1>View Data from JSON</h1>
<?php
$file = 'data.json';
if (file_exists($file)) {
  $jsonData = file_get_contents($file);
  $data = json_decode($jsonData, true);
  
  echo "<table border='1'>";
  echo "<tr><th>Name</th><th>Email</th></tr>";
  foreach ($data as $item) {
    echo "<tr><td>{$item['name']}</td><td>{$item['email']}</td></tr>";
  }
  echo "</table>";
} else {
  echo "<p>No data found in JSON file.</p>";
}
?>
</body>
</html>

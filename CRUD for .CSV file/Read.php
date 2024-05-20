<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Data from CSV File</title>
</head>
<body>
<h1>View Data from CSV File</h1>
<table border="1">
  <tr>
    <th>Name</th>
    <th>Email</th>
  </tr>
  <?php
  $file = fopen("data.csv", "r");
  if ($file) {
    while (($row = fgetcsv($file)) !== false) {
      echo "<tr>";
      foreach ($row as $cell) {
        echo "<td>$cell</td>";
      }
      echo "</tr>";
    }
    fclose($file);
  } else {
    echo "<tr><td colspan='2'>No data found in CSV file.</td></tr>";
  }
  ?>
</table>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $data = [$name, $email];
  $file = fopen("data.csv", "a");
  fputcsv($file, $data);
  fclose($file);
  echo "<script>alert('Data added to CSV file successfully!');</script>";
}
?>

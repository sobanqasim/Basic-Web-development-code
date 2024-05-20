<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $data = array(
    'name' => $_POST['name'],
    'email' => $_POST['email']
  );
  $jsonData = json_encode($data);

  $file = 'data.json';
  $currentData = file_get_contents($file);
  $currentDataArray = json_decode($currentData, true);
  $currentDataArray[] = $data;

  file_put_contents($file, json_encode($currentDataArray, JSON_PRETTY_PRINT));

  echo "<script>alert('Data added to JSON successfully!');</script>";
}
?>

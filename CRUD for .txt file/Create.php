<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $text = $_POST["text"];
  $file = fopen("data.txt", "a");
  fwrite($file, $text . "\n");
  fclose($file);
  echo "<script>alert('Text added to file successfully!');</script>";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $text = $_POST["text"];
  file_put_contents("data.txt", $text);
  echo "<script>alert('Text in file updated successfully!');</script>";
}
?>

<?php
// MySQL server configuration
$servername = "localhost"; // Change this to your MySQL server address
$username = "soban qasim"; // Change this to your MySQL username
$password = "5913"; // Change this to your MySQL password
$database = "sakila"; // Change this to your MySQL database name

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connection) {
  die("Could not connect: " . mysqli_connect_error());
} else {
  echo 'Connection Established<br>';
}

// Perform SELECT query
$sql = "SELECT * FROM category LIMIT 10"; // Example query to select first 5 records from the 'actor' table
$result = mysqli_query($connection, $sql);

// Check if query executed successfully
if ($result) {
  // Check if there are any rows returned
  if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
      echo "Category ID: " . $row["category_id"]. " - name: " . $row["name"]. " - Last_update: " . $row["last_update"]. "<br>";
    }
  } else {
    echo "No results found";
  }
} else {
  echo "Error executing query: " . mysqli_error($connection);
}

// Close connection
mysqli_close($connection);
?>

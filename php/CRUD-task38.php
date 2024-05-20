<?php
// MySQL server configuration
$servername = "localhost"; // Change this to your MySQL server address
$username = "soban qasim"; // Change this to your MySQL username
$password = "5913"; // Change this to your MySQL password
$database = "cruddb"; // Change this to your MySQL database name

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Could not connect: " . mysqli_connect_error());
} else {
    echo 'Connection Established<br>';
}

// Perform CRUD operations based on form submissions

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create (INSERT) operation
    if (isset($_POST["submit_create"])) {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $phone_number = $_POST["phone_number"];
        
        $sql_insert = "INSERT INTO users (first_name, last_name, email, phone_number) VALUES ('$first_name', '$last_name', '$email', '$phone_number')";
        
        if (mysqli_query($connection, $sql_insert)) {
            echo "New record created successfully<br>";
        } else {
            echo "Error: " . $sql_insert . "<br>" . mysqli_error($connection);
        }
    }

    // Read (SELECT) operation
    if (isset($_POST["submit_read"])) {
        $sql_select = "SELECT * FROM users";
        $result_select = mysqli_query($connection, $sql_select);
        if (mysqli_num_rows($result_select) > 0) {
            while ($row = mysqli_fetch_assoc($result_select)) {
                echo "User ID: " . $row["users_id"] . " - First Name: " . $row["first_name"] . " - Last Name: " . $row["last_name"] . " - Email: " . $row["email"] . " - Phone Number: " . $row["phone_number"] . "<br>";
            }
        } else {
            echo "No results found<br>";
        }
    }

    // Update (UPDATE) operation
    if (isset($_POST["submit_update"])) {
        $id_to_update = $_POST["users_id"];
        $new_first_name = $_POST["new_first_name"];
        $new_last_name = $_POST["new_last_name"];
        $new_email = $_POST["new_email"];
        $new_phone_number = $_POST["new_phone_number"];
        
        $sql_update = "UPDATE users SET first_name='$new_first_name', last_name='$new_last_name', email='$new_email', phone_number='$new_phone_number' WHERE users_id=$id_to_update";
        
        if (mysqli_query($connection, $sql_update)) {
            echo "Record updated successfully<br>";
        } else {
            echo "Error updating record: " . mysqli_error($connection);
        }
    }

    // Delete (DELETE) operation
    if (isset($_POST["submit_delete"])) {
        $id_to_delete = $_POST["users_id"];
        
        $sql_delete = "DELETE FROM users WHERE users_id=$id_to_delete";
        
        if (mysqli_query($connection, $sql_delete)) {
            echo "Record deleted successfully<br>";
        } else {
            echo "Error deleting record: " . mysqli_error($connection);
        }
    }
}

// Close connection
mysqli_close($connection);
?>

<!-- HTML form for CRUD operations -->
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Operations</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
    body {
    background-color: beige;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Adjusts the height to fill the viewport */
}

.container {
    background-color: brown;
    color: beige;
    padding: 20px;
    border-radius: 10px;
    text-align: left;
    max-width: 400px;
    width: 100%;
}

.container h2 {
    text-align: center;
}

.container form {
    margin-top: 20px;
}

.container form input[type="text"],
.container form input[type="email"],
.container form input[type="number"],
.container form input[type="submit"] {
    width: 100%;
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; /* Ensures padding is included in width */
}

.container form input[type="submit"] {
    background-color: brown;
    color: beige;
    cursor: pointer;
}

.container form input[type="submit"]:hover {
    background-color: #8B4513;
}
</style>
<body>
    <div class="container">
        <h2>Create Record</h2>
        <form method="post">
            <input type="text" name="first_name" placeholder="First Name">
            <input type="text" name="last_name" placeholder="Last Name">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="phone_number" placeholder="Phone Number">
            <input type="submit" name="submit_create" value="Create">
        </form>
    </div>

    <div class="container">
        <h2>Read Records</h2>
        <form method="post">
            <input type="submit" name="submit_read" value="Read">
        </form>
    </div>

    <div class="container">
        <h2>Update Record</h2>
        <form method="post">
            <input type="number" name="users_id" placeholder="User ID to Update">
            <input type="text" name="new_first_name" placeholder="New First Name">
            <input type="text" name="new_last_name" placeholder="New Last Name">
            <input type="email" name="new_email" placeholder="New Email">
            <input type="text" name="new_phone_number" placeholder="New Phone Number">
            <input type="submit" name="submit_update" value="Update">
        </form>
    </div>

    <div class="container">
        <h2>Delete Record</h2>
        <form method="post">
            <input type="number" name="users_id" placeholder="User ID to Delete">
            <input type="submit" name="submit_delete" value="Delete">
        </form>
    </div>
</body>
</html>

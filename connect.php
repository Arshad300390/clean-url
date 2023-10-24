<?php
// Database credentials
$con = mysqli_connect("localhost", "root", "", "test_db");

// Check the connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// You can use the $conn variable to perform database operations.

// For example:
// $sql = "SELECT * FROM your_table";
// $result = $conn->query($sql);

// Don't forget to close the connection when you're done.
// $conn->close();

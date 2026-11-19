<?php
// db.php - connects PHP to the MySQL database. Other files include this file.

$host = "localhost";               // the server where MySQL runs (XAMPP uses localhost)
$user = "root";                    // MySQL username (XAMPP default is root)
$password = "";                    // MySQL password (XAMPP default is empty)
$database = "katazy_portfolio";    // the database we created in database.sql

// mysqli_connect() opens the connection and stores it in $conn
$conn = mysqli_connect($host, $user, $password, $database);

// If the connection did not work, stop the page and show the reason
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

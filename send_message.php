<?php

$host = "localhost";               
$user = "root";                   
$password = "";                    
$database = "katazy_portfolio"; 

$conn = mysqli_connect($host, $user, $password, $database);

// If the connection did not work, stop the page and show the reason
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ---- Handle the form ----
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = trim($_POST["name"]);    
    $email   = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if ($name == "" || $email == "" || $message == "") {
        header("Location: contact.php?status=empty");   
        exit;                                          
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?status=email");
        exit;
    }

    $name    = addslashes($name);
    $email   = addslashes($email);
    $message = addslashes($message);

    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        header("Location: contact.php?status=sent");
    } else {
        header("Location: contact.php?status=error");
    }
    mysqli_close($conn);
}
header("Location: contact.php");
?>
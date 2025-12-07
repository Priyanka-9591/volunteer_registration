<?php
$servername = "localhost";
$username = "root";    // change as per your DB setup
$password = "";        // change as per your DB setup
$dbname = "volunteer_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

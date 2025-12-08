<?php
$servername = "localhost";
$username = "root";
$password = ""; // Default XAMPP password is empty

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    if (strpos($conn->connect_error, "Access denied") !== false) {
        echo "<h2>❌ DATABASE PASSWORD ERROR</h2>";
        echo "<p>Your database password is correctly NOT empty.</p>";
        echo "<p>Please try changing <code>\$password = '';</code> in dbconnect.php to <code>\$password = 'root';</code> or <code>\$password = 'mysql';</code></p>";
    } else {
        echo "<h2>❌ CONNECTION FAILED</h2>";
        echo "Error: " . $conn->connect_error;
    }
} else {
    echo "<h2>✅ CONNECTED SUCCESSFULLY!</h2>";
    echo "<p>Your username is 'root' and your password is empty.</p>";
}
?>

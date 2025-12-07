<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize inputs
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));
    $availability = mysqli_real_escape_string($conn, trim($_POST['availability']));

    $skills_array = $_POST['skills'] ?? [];
    $skills = implode(", ", array_map(function($v) use($conn) {
        return mysqli_real_escape_string($conn, $v);
    }, $skills_array));

    // Handle file upload
    $target_dir = "../uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    $file_name = basename($_FILES["id_photo"]["name"]);
    $target_file = $target_dir . time() . "_" . $file_name;
    $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    // Validate file type
    $allowed_types = ['jpg', 'jpeg', 'png'];
    if (!in_array($file_type, $allowed_types)) {
        die("Only JPG, JPEG, PNG files are allowed.");
    }

    // Move uploaded file
    if (!move_uploaded_file($_FILES["id_photo"]["tmp_name"], $target_file)) {
        die("Sorry, there was an error uploading your file.");
    }

    $file_path_db = "uploads/" . time() . "_" . $file_name;

    // Insert data into DB
    $sql = "INSERT INTO volunteers (name, phone, skills, availability, file_path) VALUES ('$name', '$phone', '$skills', '$availability', '$file_path_db')";
    if (mysqli_query($conn, $sql)) {
        echo "Registration successful! <a href='../display.php'>See Volunteers List</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Invalid request method.";
}
?>

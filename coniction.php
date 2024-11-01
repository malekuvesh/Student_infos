<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uvesh";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $school_name = $_POST['school_name'] ?? '';
    $student_name = $_POST['student_name'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $class = $_POST['class'] ?? '';
    $roll_number = $_POST['roll_number'] ?? '';
    $contact_number = $_POST['contact_number'] ?? '';
    $address = $_POST['Address'] ?? '';

    // SQL query
    $sql = "INSERT INTO `student_infoms`(`school_name`, `student_name`, `date`, `class`, `rollnum`, `contect_num`, `Address`) 
            VALUES ('$school_name', '$student_name', '$dob', '$class', '$roll_number', '$contact_number', '$address')";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
} else {
    echo "This page only accepts POST requests.";
    exit();
}
?>

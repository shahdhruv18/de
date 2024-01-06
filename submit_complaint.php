<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'dbname';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $complaint = $_POST['cmp'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    
    $sql = "INSERT INTO forndetails (name, email, complaint, mobile, address) VALUES ('$name', '$email', '$complaint', '$mobile', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Complaint submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

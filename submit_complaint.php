<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $complaintType = $_POST["cmp"];
    $mobile = $_POST["mobile"];
    $address = $_POST["add"];

    $data = "Name: $name\nEmail: $email\nComplaint Type: $complaintType\nMobile: $mobile\nAddress: $address\n\n";
    file_put_contents("complaints.txt", $data, FILE_APPEND);
    header("Location: thank_you.php");
    exit();
}
?>

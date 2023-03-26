<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if all fields are filled
    if (empty($email) || empty($password)) {
        die("Both fields are required.");
    }
    $first_name = "John";
    header("Location: welcome.php?first_name=$first_name");
    exit();
} else {

    header("Location: login.php");
    exit();
}

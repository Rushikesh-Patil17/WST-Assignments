<?php
// https://codewithawa.com/posts/image-preview-and-upload-using-php-and-mysql-database

// Include connection file
require_once "connection.php";
session_start();

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Prepare an insert statement
    $sql = "UPDATE users SET name = ?, phone = ?, email = ?, about = ?, address = ?, education = ?, skills = ?, interests = ? WHERE username = '" . $_SESSION['username'] . "'";

    if ($stmt = $mysqli->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param('ssssssss', $param_name, $param_phone, $param_email, $param_about, $param_address, $param_education, $param_skills, $param_interests);

        // Set parameters
        $param_name = $_POST["name"];
        $param_phone = $_POST["phone"];
        $param_email = $_POST["email"];
        $param_about = $_POST["about"];
        $param_address = $_POST["address"];
        $param_education = $_POST["education"];
        $param_skills = $_POST["skills"];
        $param_interests = $_POST["interests"];

        echo $param_name;
        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Redirect to profiles page
            header("location: profiles.php");
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $mysqli->close();
}

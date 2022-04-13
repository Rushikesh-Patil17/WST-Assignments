<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

// Include config file
require_once "connection.php";

$user = $_POST['user'];
$vote = $_POST['vote'];

if ($vote === 'up') {
    $sql = "UPDATE users SET upvotes=upvotes+1 WHERE username='$user'";
    if ($mysqli->query($sql) === FALSE) {
        echo "Error updating record: " . $mysqli->error;
    }
    $mysqli->close();
} else if ($vote == 'down') {
    $sql = "UPDATE users SET upvotes=upvotes-1 WHERE username='$user'";
    if ($mysqli->query($sql) === FALSE) {
        echo "Error updating record: " . $mysqli->error;
    }
    $mysqli->close();
}

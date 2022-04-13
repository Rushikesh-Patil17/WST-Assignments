<?php include "connection.php"; ?>

<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

// get all profiles sorted by upvotes and render
function getInfoCard($name, $username, $upvotes)
{
    return "
    <div class='card'>
        <div class='card-body'>
            <div style='margin-bottom: 20px;'></div>
            <span style='font-size: 1.3rem;'>$name</span><br />
            <p style='color: grey; margin-bottom: 10px;'>$username</p><br />
            <span style='font-size: 1.3rem; border: solid; padding: 10px; borderColor: grey;'>$upvotes</span><br />
            <div style='margin-top: 20px;'></div>
            <input type='submit' class='btn btn-primary' name='$username' value='Visit Profile'>
        </div>
    </div>
    ";
}

$sql = "SELECT * FROM users ORDER BY upvotes DESC";
$result = $mysqli->query($sql);

if ($result->num_rows - 1 > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        // skip self
        $usr = $row["username"];
        if ($usr === $_SESSION['username'])
            continue;
        echo "<form method='post' action='singleprofile.php?user=$usr'>";
        $card = getInfoCard($row["name"], $row["username"], $row["upvotes"]);
        echo "
        <div class='mx-auto' style='max-width: 500px; margin-top: 30px;'>
            $card
        </div>";
        echo '</form>';
    }
} else {
    echo "<h2>No profiles found!</h2>";
}
// Close connection
$mysqli->close()

?>

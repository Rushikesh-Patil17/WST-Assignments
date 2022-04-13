<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
// Processing form data when form is submitted
$url_components = parse_url($_SERVER['REQUEST_URI']);
parse_str($url_components['query'], $params);
$user = $params['user'];
require_once "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profile for <?php echo $_SESSION['username']?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="profiles.php">Profiler</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" style="float: right;" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li>
                    <a class="nav-link" href="updateprofile.php"><?php echo $_SESSION['username'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div style="margin-top: 40px;"></div>

    <?php
    // fetch and render data of the user
    $query = "SELECT * FROM users WHERE username='$user'";
    $result = $mysqli->query($query);

    if ($result->num_rows >= 1) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <div class='mx-auto' style='max-width: 500px; margin-top: 20px;'>
                <div class='card'>
                <div style='text-align: center;'>
                <img src='images/" . $row['profile_pic'] . "' class='card-img-top' alt='...' style='width: 100px;'>
                </div>
                <div class='card-header'><h2>" .
                $row['name'] . "</h2><br><h4>" . $row['username'] . "</h4><br>" . "<span id='vote' style='font-size: 1.3rem; border: solid; padding: 10px; borderColor: grey;'>" . $row['upvotes'] . "</span><br />" .
                "</div>
                <ul class='list-group list-group-flush'>
                <li class='list-group-item'><b>Email: </b>" . $row['email'] . "</li>
                <li class='list-group-item'><b>Phone: </b>" . $row['phone'] . "</li>
                <li class='list-group-item'><b>About: </b>" . $row['about'] . "</li>
                <li class='list-group-item'><b>Address: </b>" . $row['address'] . "</li>
                <li class='list-group-item'><b>Education: </b>" . $row['education'] . "</li>
                <li class='list-group-item'><b>Skills: </b>" . $row['skills'] . "</li>
                <li class='list-group-item'><b>Interests: </b>" . $row['interests'] . "</li>
                </ul>
                </div>
            </div>
            ";
        }
    } else {
        echo "<h2>No profile found!</h2>";
    }

    // Close connection
    $mysqli->close();
    ?>

    <div style="margin-top: 40px;"></div>
    <input id="upvote" type='button' class='btn btn-primary' value='Upvote'>
    <input id="downvote" type='button' class='btn btn-primary' value='Downvote'>
    <div style="margin-bottom: 20px;"></div>

</body>
<script type="text/javascript">
    var user = '<?php echo $user; ?>';
</script>

</html>
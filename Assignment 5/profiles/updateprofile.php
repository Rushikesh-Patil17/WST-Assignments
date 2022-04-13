<?php require_once "update_handler.php"; ?>

<?php
// fetch and render data of the user
$query = "SELECT * FROM users WHERE username='" . $_SESSION['username'] . "'";
$result = $mysqli->query($query);
$nm = $usr = $em = $ab = $ph = $add = $edu = $ski = $int = "";

if ($result->num_rows >= 1) {
    while ($row = $result->fetch_assoc()) {
        $nm = $row['name'];
        $usr = $row['username'];
        $em = $row['email'];
        $ab = $row['about'];
        $add = $row['address'];
        $ski = $row['skills'];
        $ph = $row['phone'];
        $edu = $row['education'];
        $int = $row['interests'];
    }
} else {
    echo "<h2>No profile found!</h2>";
}

// Close connection
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Profile for <?php $_SESSION['username']?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    <div class="mx-auto" style="max-width: 500px; margin-top: 20px;">
        <h2>View or Update Profile</h2>
        <form action="updateprofile.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $nm;?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $em; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="phone" name="phone" class="form-control"  value="<?php echo $ph;?>">
            </div>
            <div class="form-group">
                <label>About You</label>
                <textarea name="about" class="form-control"><?php echo $ab;?></textarea>
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea type="textarea" name="address" class="form-control"><?php echo $add?></textarea>
            </div>
            <div class="form-group">
                <label>Education</label>
                <input type="text" name="education" class="form-control" value="<?php echo $edu;?>">
            </div>
            <div class="form-group">
                <label>Skills</label>
                <textarea name="skills" class="form-control"><?php echo $ski;?></textarea>
            </div>
            <div class="form-group">
                <label>Interests</label>
                <textarea name="interests" class="form-control"><?php echo $int;?></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>
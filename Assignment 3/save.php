<!DOCTYPE html>
<html>
<body>
    <?php include 'connection.php'; ?>
    <?php
        if ($_POST['action']) {
            $firstname = $_REQUEST['firstname'];
            $lastname = $_REQUEST['lastname'];
            $username = $_REQUEST['username'];
            $email = $_REQUEST['email'];
            $state = $_REQUEST['state'];
            $country = $_REQUEST['country'];

            $sql = "INSERT INTO users VALUES ('$firstname',
        			'$lastname','$username','$email','$state', '$country')";

            if (mysqli_query($conn, $sql)) {
                "<h3>Data stored in a database successfully!</h3>";
            } else {
                echo "<h3>Data storage failed!</h3>" . mysqli_error($conn);
            }

            // Close connection
            mysqli_close($conn);
        }
    ?>
</body>
</html>
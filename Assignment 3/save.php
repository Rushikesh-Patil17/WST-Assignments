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
            echo "
            <div class='alert alert-success'>
                Data saved successfully!
            </div>";
        } else {
            echo "
            <div class='alert alert-danger'>
                Data storage failed!
            </div>";
        }

        // Close connection
        mysqli_close($conn);
    }
    ?>
</body>

</html>
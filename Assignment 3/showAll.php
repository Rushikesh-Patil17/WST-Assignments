<!DOCTYPE html>
<html>

<head>
    <title>View All Info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <?php include 'connection.php'; ?>
    <?php

    function getInfoCard($fname, $lname, $username, $email, $state, $country)
    {
        return "
        <div class='card'>
            <div class='card-body'>
                <b>Name: </b>$fname $lname<br />
                <b>Username: </b>$username <br />
                <b>Email: </b>$email </br>
                <b>State: </b>$state <br />
                <b>Country: </b>$country
            </div>
        </div>
        ";
    }

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $card = getInfoCard($row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["state"], $row["country"]);

            echo "
            <div class='mx-auto' style='width: 500px; margin-top: 50px;'>
                $card
            </div>";
        }
    } else {
        echo "<h2>No Information found!</h2>";
    }
    // Close connection
    mysqli_close($conn);
    ?>
</body>

</html>
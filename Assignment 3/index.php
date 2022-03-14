<html>

<?php include 'save.php'; ?>

<head>
  <title>Enter Information</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
    function clearform() {
      document.getElementById("firstname").value = "";
      document.getElementById("lastname").value = "";
      document.getElementById("username").value = "";
      document.getElementById("email").value = "";
      document.getElementById("country").value = "";
      document.getElementById("state").value = "";
    }
  </script>
</head>

<body>
  <?php include 'navbar.php'; ?>
  <div class="mx-auto" style="max-width: 500px; margin-top: 50px;">
    <form action="#" method="post">
      <!-- First Name -->
      <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter first name">
      </div>
      <!-- Last Name -->
      <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last name">
      </div>
      <!-- Username -->
      <div class="form-group">
        <label for="username">User Name</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
      </div>
      <!-- Email address -->
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
      </div>
      <!-- State -->
      <div class="form-group">
        <label for="state">State</label>
        <input type="text" class="form-control" id="state" name="state" placeholder="Enter state">
      </div>
      <!-- Country -->
      <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control" id="country" name="country" placeholder="Enter country">
      </div>
      <!-- Send button -->
      <button type="submit" class="btn btn-primary" name="action" value="send">Send</button>
      <!-- Clear button -->
      <button type="button" class="btn btn-secondary" name="action" value="clear" onClick="clearform();">Clear</button>
    </form>
  </div>
</body>

</html>
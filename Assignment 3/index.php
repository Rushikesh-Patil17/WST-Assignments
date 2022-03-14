<html>

<?php include 'save.php'; ?>
<head>
  <title>Enter Information</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <script>
    function clearform() {
      document.getElementById("firstname").value="";
      document.getElementById("lastname").value="";
      document.getElementById("username").value="";
      document.getElementById("email").value="";
      document.getElementById("country").value="";
      document.getElementById("state").value="";
    }
  </script>
</head>

<body>
  <div class="mx-auto" style="width: 500px; margin-top: 100px;">
    <form action="#" method="post">
      <!-- First Name -->
      <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="firstname"  name="firstname" placeholder="Enter first name">
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
      <button type="submit" class="btn btn-primary" name="action" value="send">Send</button>
      <button type="button" class="btn btn-secondary" name="action" value="clear" onClick="clearform();">Clear</button>
      <a href="./showAll.php">Show all records</a>
    </form>
  </div>
</body>

</html>
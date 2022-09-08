<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Apply</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="../css/styles.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<?php include "navbar.php"; ?>
<div class="container" id="formc">  
  <form class="form" enctype="multipart/form-data" method="POST">
    <p>Apply</p>
   
    <div>
      <input placeholder="First Name" type="text" name="firstname" id="firstname" required>
    </div>
    <div>
      <input placeholder="Last Name" type="text" name="lastname" id="lastname" required>
    </div>
    <div>
      <input placeholder="Age" type="number" min="18" max="99" name="age" id="age" required>
    </div>
    <div>
      <input placeholder="Phone Number" name="phone" type="tel" id="number" required>
    </div>
    <div>
      <input placeholder="Email Address" type="email" name="email" id="email" required>
    </div>
    <div>
      <label for="resume">Upload your resume here:</label> 
      <input type="file" name="resume" id="resume" required>
    </div>
    <div>
      <button name="submit" type="submit" id="submit">APPLY</button>
    </div>

  </form>
</div>
<?php include "footer.php"; ?>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('db_credentials.php');
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $age = $_POST["age"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $name = basename($_FILES["resume"]["name"]);

    $db = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_SERVER, DB_USER, DB_PWD);

    $query = "INSERT INTO Applicants(nameFirst, nameLast, age, phone, email, resumeName)VALUES('$firstName', '$firstName', '$age', '$phone', '$email', '$name')";
        $stmt = $db->query($query);
        $db = null;

    $upload_dir = "../uploads";
    $tmp_name = $_FILES["resume"]["tmp_name"];
    move_uploaded_file($tmp_name, "$upload_dir/$name");
}
?>
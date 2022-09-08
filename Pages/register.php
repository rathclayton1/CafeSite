<?php
session_start();
include("db.php");

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $login = "login.php";
    if (register($name, $password, $email)) {
        
        header("location: $login");
    }
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Register</title>
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
    <p>REGISTER</p>
   
    <div>
      <input placeholder="Username" type="text" name="name" id="name" required>
    </div>
    <div>
      <input placeholder="Password" type="password" name="password" id="password" required>
    </div>
    <div>
      <input placeholder="Email Address" type="email" name="email" id="email" required>
    </div>
    <div>
      <label for="submit">You will be redirected to login once your account is created.</label>
      <button name="submit" type="submit" id="submit">Register</button>
    </div>
</div>
</body>
<?php include "footer.php"; ?>
</html>
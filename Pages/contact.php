<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Contact</title>
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
  <form class="form" method="POST">
    <p>Contact Us</p>
   
    <div>
      <input placeholder="Name" type="text" name="name" id="name" required>
    </div>
    <div>
      <input placeholder="Email Address" type="email" name="email" id="email" required>
    </div>
    <div>
      <input placeholder="Phone Number (optional)" name="phone" type="tel" id="number">
    </div>
    
    <div>
      <textarea placeholder="How can we help?" name="message" id="response" required></textarea>
    </div>
    <div>
      <button name="submit" type="submit" id="submit">Submit</button>
    </div>

  </form>
</div>
<?php include "footer.php"; ?>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
require_once('db_credentials.php');
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$db = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_SERVER, DB_USER, DB_PWD);

$query = "INSERT INTO Feedback(name, email, phone, message)VALUES('$name','$email','$phone','$message')";
      $stmt = $db->query($query);
      
      $db = null;
}
?>

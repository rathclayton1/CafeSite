<?php

require_once('db_credentials.php');
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$db = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_SERVER, DB_USER, DB_PWD);

$query = "INSERT INTO Feedback(name, email, phone, message)VALUES('$name','$email','$phone','$message')";
      $stmt = $db->query($query);
      
      $db = null;
?>



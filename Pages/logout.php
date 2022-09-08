<?php 
session_start();

session_destroy();
session_regenerate_id(TRUE);
session_start();
$home = "home.php";
header("location: $home");

?>
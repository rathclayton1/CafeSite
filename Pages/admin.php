<?php 
session_start();
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Manager</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="../css/styles.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
    <body>
    <?php include "navbar.php"; $name = $_SESSION["name"]; ?>
        <div class="container" id="formc">
            <form class="form" method="POST">
            <p>Welcome <?= $name ?> </p>
                <label for="adm">Choose a table to view</label>  
                <div id="adm">
                <label for="applicants">Applicants</label>
                <input type="radio" name="radio" value="Applicants" checked>
                </div>
                <div>
                <label for="feedback">Feedback</label>
                <input type="radio" name="radio" value="Feedback">
                </div>
                <div>
                <label for="orders">Orders</label>
                <input type="radio" name="radio" value="Orders">
                </div>
                <div>
                <button name="submit" type="submit" id="submit">Retrieve</button>
                </div>
                <a class="lead ord" id="lout" href="logout.php">Logout</a>      
            </form>
        </div>
        <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    require_once('db_credentials.php');
                    $radio = $_POST["radio"]; 
                    $db = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_SERVER, DB_USER, DB_PWD);
                    $rows = $db->query("SELECT * FROM $radio");
                    if ($radio == "Applicants") { ?>
                        <table>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Resume Name</th>
                                <th>Time Applied</th>
                            </tr>
                     <?php foreach($rows as $row) { ?>
                                <tr>
                                    <td> <?= $row["nameFirst"] ?> </td>
                                    <td> <?= $row["nameLast"] ?> </td>
                                    <td> <?= $row["age"] ?> </td>
                                    <td> <?= $row["phone"] ?> </td>
                                    <td> <?= $row["email"] ?> </td>
                                    <td> <?= $row["resumeName"] ?> </td>
                                    <td> <?= $row["timeApplied"] ?> </td>
                                </tr>
                     
                    <?php } ?> </table> 
                <?php } 
                    
                    if ($radio == "Feedback") { ?>
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                            </tr>
                     <?php foreach($rows as $row) { ?>
                                <tr>
                                    <td> <?= $row["name"] ?> </td>
                                    <td> <?= $row["email"] ?> </td>
                                    <td> <?= $row["phone"] ?> </td>
                                    <td> <?= $row["message"] ?> </td>
                                </tr>
                     
                    <?php } ?> </table> 
                <?php }

                    if ($radio == "Orders") { ?>
                        <table>
                            <tr>
                                <th>Username</th>
                                <th>Order</th>
                            </tr>
                    <?php foreach($rows as $row) { ?>
                                <tr>
                                    <td> <?= $row["User"] ?> </td>
                                    <td> <?= $row["Items"] ?> </td>
                                </tr>
                    
                    <?php } ?> </table> 
                    <?php }
                                
            }?>
    </body>
    <?php include "footer.php"; ?>
</html>
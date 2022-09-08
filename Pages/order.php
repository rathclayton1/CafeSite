<?php 
session_start();
include("db.php");
$login = "login.php";
$manager = "admin.php";
if (!isset($_SESSION["name"])) {
    header("location: $login");
}
if (isAdmin($_SESSION["name"])) {
    header("location: $manager");
}

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Order</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="../css/styles.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="../javascript/order.js" defer></script>
</head>
<body>
<?php include "navbar.php"; $name = $_SESSION["name"]; ?>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto col-12 text-center mb-3">
            <h1 class="mt-0">Welcome, <?= $name ?>.  </h1>
            <p class="lead">Select the item(s) you wish to order.</p>
            <a class="lead" id="out" href="logout.php">Logout</a>
        </div>
        <div class="col-12 mt-4">
            <h3 class="text-center menu" id="classic">Classic drinks</h3>
            <p class="lead text-center">Our always avaiable, well known drinks.</p>
            <hr class="accent my-5">
        </div>
        <div class="card-columns" id="classic1">
            <div class="card card-body">
                <span class="float-right font-weight-bold">$2.49 sm, $3.49 lg</span>
                <h6 class="text-truncate menu" id="espresso">Espresso</h6>
                <p class="small">A classic espresso roast with caramel added.</p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">$2.49 sm, $3.49 lg</span> 
                <h6 class="text-truncate menu" id="americano">Americano</h6> 
                <p class="small">Classic espresso slightly diluted with water, but crafted to maintain richness.</p> 
            </div> 
            <div class="card card-body"> 
                <span class="float-right font-weight-bold">$3 sm, $4 lg</span> 
                <h6 class="text-truncate menu" id="macchiato">Macchiato</h6> 
                <p class="small">The perfect combination of coffee, milk, vanilla, and caramel.</p> 
            </div> 
            <div class="card card-body"> 
                <span class="float-right font-weight-bold">$3 sm, $4 lg</span> 
                <h6 class="text-truncate menu" id="cappuccino">Cappuccino</h6> 
                <p class="small">Darker espresso under a smooth layer of milky foam.</p> 
            </div> 
            <div class="card card-body"> 
                <span class="float-right font-weight-bold" >$3.49 sm, $4.49 lg</span> 
                <h6 class="text-truncate menu" id="latte">Latte</h6> 
                <p class="small">Espresso with flavoring but combine it with steamed milk.</p> 
            </div> 
            <div class="card card-body"> 
                <span class="float-right font-weight-bold">$2.49 sm, $3.49 lg</span> 
                <h6 class="text-truncate menu" id="hotchoc">Hot Chocolate</h6> 
                <p class="small">Straight warm milk chocolate-y goodness.</p> 
            </div>
        </div>
        <div class="col-12 mt-4">
            <h3 class="text-center menu" id="specialty">Specialty drinks</h3>
            <p class="lead text-center">Limited time offerings.</p>
            <hr class="accent my-5">
        </div>
        <div class="card-columns" id="specialty1">
            <div class="card card-body"> 
                <span class="float-right font-weight-bold">$3.50 sm, $4.50 lg</span> 
                <h6 class="text-truncate menu" id="wcm">White Chocolate Mocha</h6> 
                <p class="small">Classic espresso combined with sweet white chocoalte sauce topped with cream.</p> 
            </div> 
            <div class="card card-body"> 
                <span class="float-right font-weight-bold">$3.50 sm, $4.50 lg</span> 
                <h6 class="text-truncate menu" id="pm">Peppermint Mocha</h6> 
                <p class="small">Peppermint flavored syrup mixed into an espresso roast topped with candy cane pieces.</p> 
            </div> 
            <div class="card card-body"> 
                <span class="float-right font-weight-bold">$4 sm, $5 lg</span> 
                <h6 class="text-truncate menu" id="frap">Blended Caramel Frappe</h6> 
                <p class="small">Thickened caramel espresso goodness topped with cream.</p> 
            </div> 
            <div class="card card-body"> 
                <span class="float-right font-weight-bold">$4 sm, $5 lg</span> 
                <h6 class="text-truncate menu" id="haz">Toasted Hazelnut Hot Chocolate</h6> 
                <p class="small">Sweet hazelnut flavor meets already sweet milk chocolate.</p> 
            </div> 
            <figure class="float-left"> 
                <img class="frap rounded" src="../images/img4.jpg" alt="Caramel Frappe"> 
                <figcaption class="text-center">Blended Caramel Frappe</figcaption> 
            </figure>
        </div>
        <div class="col-12 mt-4">
            <h3 class="text-center menu" id="bakery">Bakery</h3>
            <p class="lead text-center">Baked fresh in our kitchen each morning.</p>
            <hr class="accent my-5">
        </div>
        <div class="card-columns" id="bakery1">
            <div class="card card-body"> 
                <span class="float-right font-weight-bold">$3</span> 
                <h6 class="text-underline menu" id="bag">Toasted Bagel</h6> 
                <p class="small">Plain, blueberry, or onion. Served with cream cheese.</p> 
                <span class="font-weight-bold small"></span> 
            </div> 
            <div class="card card-body"> 
                <span class="float-right font-weight-bold">$4</span> 
                <h6 class="menu" id="muffin">Muffin</h6> 
                <p class="small">Blueberry, chocolate, or pumpkin. Topped with sugar crystals.</p> 
            </div> 
            <div class="card card-body"> 
                <span class="float-right font-weight-bold">$4</span> 
                <h6 class="menu" id="scone">Scone</h6> 
                <p class="small">Perfect dryness to compliment a drink. Blueberry, chocolate, and apple.</p> 
            </div> <div class="card card-body"> 
                <span class="float-right font-weight-bold">$5</span> 
                <h6 class="menu" id="cin">Cinnamon Roll</h6> 
                <p class="small">Warm, gooey cinnamon goodness. Bigger than you think.</p> 
            </div> <figure class="float-left"> 
                <img class="frap rounded" src="../images/img5.jpg" alt="Chocolate Scone"> 
                <figcaption class="text-center">Chocolate Scone</figcaption> 
            </figure>
        </div>
    </div>
    <button class="ord" id="submit">Place Order</button>
</div>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_POST = json_decode(file_get_contents('php://input'), true);

    $db = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_SERVER, DB_USER, DB_PWD);
        
        $query = "INSERT INTO Orders(User, Items) VALUES ('$name', '$_POST')";
            $stmt = $db->query($query);
            $db = null;

}
?>
</body>
<?php include "footer.php"; ?>
</html>
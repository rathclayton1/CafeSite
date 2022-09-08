<!DOCTYPE html>
<html lang="en">
<title>Menu</title>
<meta charset="UTF-8">
<?php include "navbar.php"; ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="../css/styles.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="../javascript/menu.js" defer></script>
<body>
<!--Bootstrap menu-->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto col-12 text-center mb-3">
            <h1 class="mt-0">Our Menu</h1>
            <p class="lead">Our current offerings, all available both in store and for delivery. Make it iced for $0.25.</p>
        </div>
        <div class="col-12 mt-4">
            <h3 class="text-center menu" id="classic">Classic drinks</h3>
            <p class="lead text-center">Our always avaiable, well known drinks.</p>
            <hr class="accent my-5">
        </div>
        <div class="card-columns" id="classic1"></div>
        <div class="col-12 mt-4">
            <h3 class="text-center menu" id="specialty">Specialty drinks</h3>
            <p class="lead text-center">Limited time offerings.</p>
            <hr class="accent my-5">
        </div>
        <div class="card-columns" id="specialty1"></div>
        <div class="col-12 mt-4">
            <h3 class="text-center menu" id="bakery">Bakery</h3>
            <p class="lead text-center">Baked fresh in our kitchen each morning.</p>
            <hr class="accent my-5">
        </div>
        <div class="card-columns" id="bakery1"></div>
    </div>
</div>
<?php include "footer.php"; ?>
</body>
</html>
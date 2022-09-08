<!DOCTYPE html>
<html lang="en">
<head>
<title>The Bean</title>
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

<section class="section-intro">
    <header>
      <h1>The Bean</h1>
    </header>
</section>

  <section class="about-section">
    <article>
      <h3>
          Welcome to The Bean.
      </h3>
      <p>
        Founded in 2011, The Bean is focused on community and consistently
        creating quality coffee-based drinks. With a drink selection ranging from pour-over
        coffees to lattes, The Bean is committed to making excellent beverages with organic,
        ethically sourced coffees for the Fox Valley area.
      </p>
    </article>
  </section>
  <section id="carousel">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-10" src="../images/shop3.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-10" src="../images/shop2.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-10" src="../images/shop1.jpg">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
  <?php include "footer.php"; ?>
  </body>
  </html>

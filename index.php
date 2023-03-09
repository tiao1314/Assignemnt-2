<?php
include 'includes/include.php';

?>

<main><!-- /.container -->

<form class="d-flex" action="search.php" method="GET">
  <input class="form-control me-2" type="search" name="search_query" placeholder="Search games" aria-label="Search">
  <button class="btn btn-outline-success" type="submit">Search</button>
</form>



<div id="featured-games-carousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/game1.jpg" class="d-block w-100" alt="Game 1" style="object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Valorant</h5>
        <p>Valorant is a 5v5 character-based tactical shooter game set in a near-future world.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/game2.jpg" class="d-block w-100" alt="Game 2" style="object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h5>League Of Legends</h5>
        <p>League of Legends is a fast-paced, competitive online game that blends the speed and intensity of an RTS with RPG elements.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/game3.jpg" class="d-block w-100" alt="Game 3" style="object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Overwatch</h5>
        <p>Overwatch is a highly stylized team-based shooter set on a near-future earth.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#featured-games-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#featured-games-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<script src="js/bootstrap.bundle.min.js"></script>
<footer class="bg-dark text-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>About Us</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum euismod, ante in bibendum semper, risus felis efficitur sapien, eget venenatis ipsum mauris sed nisi.</p>
      </div>
      <div class="col-md-4">
        <h5>Contact Us</h5>
        <ul class="list-unstyled">
          <li>1234 Main St.</li>
          <li>DKIT, Z2 12345</li>
          <li>Phone: (555) 555-5555</li>
          <li>Email: info@gamesdatabase.com</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Connect With Us</h5>
        <ul class="list-unstyled">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">LinkedIn</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="text-center">
      <p>&copy; <?php echo date("Y"); ?> Games Database, Inc.</p>
    </div>
  </div>
</footer>
</body>
</html>

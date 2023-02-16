<?php
require_once('database/database.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Starter Template · Bootstrap v5.0</title>
    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="mystyle.css" rel="stylesheet">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
      <div class="container">
        <a class="navbar-brand" href="index.php">Games Datbase </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>
          <span class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-1.php">Page 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-2.php">Page 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-3.php">Page 3</a>
              </li>
            </ul>
          </span>
        </div>
      </div>
    </nav>

<main class="container">
<h1>Product List</h1>
    <section>
        <!-- display a table of game info -->
        <table>
            <tr>
                <th>Game ID</th>
                <th>Name</th>
                <th>Date Released</th>
                <th>genre</th>
                <th>Platform</th>
                <th>Age_rating</th>
                <th>Price</th>
                <th>Description</th>               
            </tr>

            <?php foreach ($games as $game) : ?>
            <tr>
                <td><?php echo $game['gameID']; ?></td>
                </form></td>
            </tr>
            <?php endforeach; ?>

            
        </table>
    </section>



</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <footer>
    <p>&copy; <?php echo date("Y"); ?> Games Database, Inc.</p>
</footer>
  </body>
</html>

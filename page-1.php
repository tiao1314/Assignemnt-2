<?php
require_once('database/database.php');

// Get all games
$query = 'SELECT * FROM games ORDER BY gameID';
$statement = $db->prepare($query);
$statement->execute();
$games = $statement->fetchAll();
$statement->closeCursor();

?>

<?php
include 'includes/include.php'
?>


<main class="container">
<h1>Product List</h1>
    <section>
        <!-- display a table of game info -->
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Founded</th>
                <th>genre</th>
                <th>Platform</th>
                <th>Age_rating</th>
                <th>Price</th>
                <th>Description</th>               
            </tr>
                
            <?php foreach ($games as $game) : ?>
            <tr>
                <td><?php echo $game['gameID']; ?></td>
                <td><?php echo $game['name']; ?></td>
                <td><?php echo $game['release_date']; ?></td>
                <td><?php echo $game['genre']; ?></td>
                <td><?php echo $game['platform']; ?></td>
                <td><?php echo $game['age_rating']; ?></td>
                <td><?php echo $game['price']; ?></td>
                <td><?php echo $game['description']; ?></td>
                
                
            </tr>
            <?php endforeach; ?>
        </table>


            
    </section>



</main><!-- /.container -->
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



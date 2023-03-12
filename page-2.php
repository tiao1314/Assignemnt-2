<?php
require_once('database/database.php');

// Get all developers
$query = 'SELECT * FROM developers ORDER BY developerID';
$statement = $db->prepare($query);
$statement->execute();
$developers = $statement->fetchAll();
$statement->closeCursor();

?>

<?php
include 'includes/include.php'
?>


<main class="container">
<h1>Developer List</h1>
    <section>
        <!-- display a table of developer info -->
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Delete</th>
            </tr>

            <?php foreach ($developers as $developer) : ?>
<tr>
    <td><?php echo $developer['developerID']; ?></td>
    <td><?php echo $developer['name']; ?></td>
    <td>
        <form action="delete_developer.php" method="post">
            <input type="hidden" name="developer_id" value="<?php echo $developer['developerID']; ?>">
            <button type="submit" class="btn btn-danger btn-sm delete-btn">Delete</button>
        </form>
    </td>
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

  <div id="delete-success-message" class="alert alert-success" role="alert" style="display:none">
  The row has been successfully deleted.
</div>

</footer>
<script>

  // Show success message when page loads
  $(document).ready(function() {
    $('#delete-success-message').fadeIn();
    setTimeout(function() {
      $('#delete-success-message').fadeOut();
    }, 3000); // hide after 3 seconds
  });
</script>
</body>

</html>
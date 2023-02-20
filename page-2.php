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
                <th>Delete</th>
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
                <td>
                <form action="delete_game.php" method="post">
            <input type="hidden" name="game_id" value="<?php echo $game['gameID']; ?>">
            <button type="submit" class="btn btn-danger delete-btn">Delete</button>
        </form>
            </td>
                
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



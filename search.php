<?php
require_once('database/database.php');

// Get the search query
$search_query = isset($_GET['search_query']) ? $_GET['search_query'] : '';

// Query the database for games matching the search query
$query = "SELECT * FROM games WHERE name LIKE '%$search_query%' ORDER BY gameID";
$statement = $db->prepare($query);
$statement->execute();
$games = $statement->fetchAll();
$statement->closeCursor();
?>

<?php include 'includes/include.php'; ?>

<main class="container">
  <h1>Search Results</h1>

  <?php if (!empty($search_query)) : ?>
    <p>Showing results for "<?php echo $search_query; ?>"</p>
  <?php endif; ?>

  <?php if (count($games) > 0) : ?>
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Release Date</th>
        <th>Genre</th>
        <th>Platform</th>
        <th>Age Rating</th>
        <th>Price</th>
        <th>Description</th>
      </tr>
      <?php foreach ($games as $game) : ?>
        <tr>
          <td><?php echo $game['gameID']; ?></td>
          <td><a href="game.php?game_id=<?php echo $game['gameID']; ?>"><?php echo $game['name']; ?></a></td>
          <td><?php echo $game['release_date']; ?></td>
          <td><?php echo $game['genre']; ?></td>
          <td><?php echo $game['platform']; ?></td>
          <td><?php echo $game['age_rating']; ?></td>
          <td><?php echo $game['price']; ?></td>
          <td><?php echo $game['description']; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php else : ?>
    <p>No games found.</p>
  <?php endif; ?>
</main>


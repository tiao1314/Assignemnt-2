<?php
require_once('database/database.php');

// Get the developerID from the POST request
$developerID = filter_input(INPUT_POST, 'developer_id', FILTER_VALIDATE_INT);

// Delete all games associated with the developer
$query = 'DELETE FROM games WHERE developerID = :developerID';
$statement = $db->prepare($query);
$statement->bindValue(':developerID', $developerID);
$statement->execute();
$statement->closeCursor();

// Delete the developer
$query = 'DELETE FROM developers WHERE developerID = :developerID';
$statement = $db->prepare($query);
$statement->bindValue(':developerID', $developerID);
$statement->execute();
$statement->closeCursor();

// Display success message
echo "<div id='delete-success-message' class='alert alert-success' role='alert'>
        The row has been successfully deleted.
      </div>";

// Redirect to the developer list page
header("Refresh:3; url=page-2.php"); // redirect after 3 seconds
?>
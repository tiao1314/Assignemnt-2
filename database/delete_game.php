<?php
require_once('database.php');

// Get IDs
$game_id = filter_input(INPUT_POST, 'gameID', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($gameID != false) {
    $query = 'DELETE FROM games
              WHERE  = game_id = :gameID';
    $statement = $db->prepare($query);
    $statement->bindValue(':gameID', $gameID);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the games List page
include('index.php');
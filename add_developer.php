<?php
require_once('database/database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];

    // Validate form data
    $errors = [];
    if (empty($name)) {
        $errors[] = 'Name is required';
    }

    // Insert data into database
    if (empty($errors)) {
        $query = 'INSERT INTO developers (name) VALUES (:name)';
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->execute();
        $statement->closeCursor();

        // Redirect to index page
        header('Location: page-2.php');              

    }
}






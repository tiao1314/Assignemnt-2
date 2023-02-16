<?php
    $dsn = 'mysql:host=localhost;dbname=game_shop';
    $username = 'tiao';
    $password = 'tiao1314';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }   
?>
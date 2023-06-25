<?php

// DBと接続
$dsn =  "mysql:dbname=test_db;host=run-php-db";
$user = "test";
$password = "test123";

try {
    $pdo = new PDO($dsn, $user, $password);
    $stn = $pdo->query("SELECT * FROM users WHERE id = 1");
    $user = $stn->fetch((PDO::FETCH_ASSOC));
    var_dump($user);

} catch (PDOException $error) {
    print("ERROR: ". $error -> getMessage());
    exit;
}


<?php

$dsn = 'mysql:host=localhost;dbname=ecommerce_h53';
$username = 'root';
$password = '';

try{
    $connection = new PDO($dsn, $username, $password);
    //change the default errormode
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //Change the fetch mode.
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
//    
//    echo 'Database connection successful!';
} catch (PDOException $e) {
    echo 'Database connection failed!'.$e->getMessage();
}











?>

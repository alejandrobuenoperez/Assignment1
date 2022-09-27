<?php
    define('DB_SERVER','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','basesdepatos');
    define('DB_NAME','Assignment3');

    $connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
    if($connection===false){
        die('Error connecting to database: ' . mysqli_connect_error());
    }
?>
<?php
    session_start();


    
    require 'constant.php';
    define('ROOT_URL', 'http://localhost/social app/dist');

    $conn =new  MYSQLI($servername, $username, $password, $dbname);
    if($conn){
        // echo('connected');
    }else
    {
        die('Database connection error:' . $conn->connect_error);
    }
    // $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db)
    
?>
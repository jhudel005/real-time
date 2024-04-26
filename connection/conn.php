<?php 
function connection(){

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "rt_db";

    // Create connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else {

        return $conn;
    }
}

?>
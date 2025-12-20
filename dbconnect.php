<?php
    $db_username = "root";
    $db_password = "";
    $db_servername = "localhost";
    $db_name = "mycaldb";
    $db_port = "3307"; // 3307 is default port for mariadb; 3306 is default port for mysql
 
    $db_conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name, $db_port);
 
    // if this if statement is true, it means the database connection failed
   
?>
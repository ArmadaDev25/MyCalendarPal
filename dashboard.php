<?php
    // DB connection
    //Include the database connection file here
    require_once 'dbconnect.php';
    session_start();
    // the user must be logged in to access this page
    if($_SESSION['username'] ==""){
        // Redirect to the intranet page
        header("Location: loginpage.php");


    } 
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard</title>
    <!-- Link to Global CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include "menu.php"; ?>
    </header>
    <!--Greets the user by their login name-->
    <h1 id="dashhead">
        <div>
        Hello, 
        </div>
        <div id="dashUser"> 
        <?php
        echo  $_SESSION['username'];
        ?>
        <div>
    </h1>
    <!-- Task list-->
    <h2>My Tasks</h2>
    <!---->
    <?php
    // Build the select statment
    $sql = "SELECT taskname, taskdis, taskID, duedate FROM tasks";
    // Run the Query
    $result = $db_conn->query($sql);

    // Checks to see if there are more than o rows in the array
    if($result->num_rows >0){
        // Pulls the results into an associative array
        while ($row = $result->fetch_assoc()){
            echo $row["taskname"] .  " - " . $row["taskdis"] . " " . $row["duedate"] . "<BR>";
        }
    }

    ?>
    
</body>
</html>
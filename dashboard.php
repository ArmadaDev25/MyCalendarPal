<?php
    // DB connection
    //Include the database connection file here
    require_once 'dbconnect.php'; 
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard</title>
</head>
<body>
    <!-- Task list-->
    <h2>My Tasks</h2>
    <!---->
    <?php
    // Build the select statment
    $sql = "SELECT * FROM tasks";
    // Run the Query
    $result = ;
    // Convert the query into something usable
    $arrTasks = mysqli_fetch_array($result);
    if($arrTasks){
        // Loop through the results and print them out
        foreach($arrTasks as $row){
            echo $row["taskname"];
        }


    }

    ?>
    
</body>
</html>
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
    $sql = "SELECT taskname, taskdis, taskID, duedate FROM tasks";
    // Run the Query
    $result = $db_conn->query($sql);
   
    if($result->num_rows >0){
        while ($row = $result->fetch_assoc()){
            echo $row["taskname"];
        }
    }

    ?>
    
</body>
</html>
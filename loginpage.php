<?php
// Starts the session for this page
session_start();

// Message that displays on when the login fails
$message = "";

// Login Logic
// Check to see if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Include the database connection file here
    require_once 'dbconnect.php';
    // Variables 
    // username variable
    $username = $_POST['txtUserName'];
    // variable to hold the password
    $password = $_POST['txtPassword'];
    // Query the database for a match for the username and password
    $sql = "SELECT user, accountID FROM accounts WHERE username = '$username' AND password = '$password'";
    // run the query
    $result = mysqli_query($db_conn, $sql);

    // convert the query result into an array
    $arrUser = mysqli_fetch_array($result);

    // check to see if the user logged in correctly
    if (isset($arrUser)){
        $message = "Login Sucess";

        // set up a session variable to inicate that the user has logged in
        $_SESSION['username'] = $username;


        // Redirect to the intranet page
        header("Location: dashboard.php");

    }else{
        $message = "Login Failed";
        $_SESSION['username'] = "";

    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link to Global CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include "menu.php"; ?>
        <h1>Login</h1>
    </header>
    <main>
        <p> <?php echo $message;?></p>
        
        
        <form name="frmLogin" id="frmLogin" method="post" action="loginpage.php">
            <!-- username input-->
            <div>
                <label for="txtUserName">Username:</label>
                <input type="text" id="txtUserName" name="txtUserName">
            </div>
            <!-- password input-->
            <div>
                <label for="txtPassword">Password:</label>
                <input type="password" id="txtPassword" name="txtPassword">
            </div>
            <!-- Submit Button-->
            <button type="submit">Submit</button>
            

        </form>
    </main> 
    
</body>
</html>
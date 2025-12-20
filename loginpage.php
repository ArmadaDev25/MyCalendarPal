
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>
        <?php include "menu.php"; ?>
        <h1>Login</h1>
    </header>
    <main>
        <!--Div Message that is displayed if the data in the form is not valid-->
        <div id="errorMessage"></div>
        
        
        <form name="frmLogin" id="frmLogin" method="post" action="">
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
            <!-- password input-->
            <button type="submit">Submit</button>
            

        </form>
    </main> 
    
</body>
</html>
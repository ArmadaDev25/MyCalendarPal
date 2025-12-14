

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--JQuery Include-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        // Runs the update time function upon the loading of the webpage
        $(document).ready(function() {
            function updateTime(){
                // gets the current time
                var currentTime = new Date();
                // converts the time to a readable sting for th user
                var timeString = currentTime.toLocaleTimeString();
                // Contains a shortcut to the clock element
                clock = document.getElementById("clock");
                // Console log to make sure this function is calling the correct HTML element
                console.log(clock);
                // Sets the text in the clock to the current time 
                clock.textContent = timeString;
                
            }
            // Calls the updateTime function
            updateTime();
            // Function will run every second
            setInterval(updateTime, 1000);

        });

        
    </script>
</head>
<body>
    <header>
        <?php include "menu.php"; ?>
        <h1>My Calender Pal<h2>
    </header>
    <main>
        <div id="contClock">
        <p>It is </p>
        <div id="clock"></div>
        </div>
    

    </main>
    <div id="clock"></div>
    
</body>
</html>

<?php
session_start();
?>
<!Dcotype html>
<html>
    <head>
        <title></title>
     <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        
        <div class="log">
            <h3>LogIn Form</h3>
            <form action="connection.php" method="post">
                <input type="email" name="email" placeholder="Enter Username" required><br>
                <input type="password" name="password" placeholder="Enter Password" required><br>
                <input type="submit" name="login" value="submit"  id="btn"><br>
                
            </form>
        </div>  
        
        
        
        
        
        
        
    </body>
</html>

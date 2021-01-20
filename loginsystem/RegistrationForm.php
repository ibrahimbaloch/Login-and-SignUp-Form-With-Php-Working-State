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
        
        <div class="sigup">
            <h3>SignUp Form</h3>
            <hr>
            <form action="connection.php" method="post">
                <label > First Name</label><br>
                <input type="text" name="firstname" placeholder="Enter FirstName" required><br><br>
                <label > Last Name</label><br>
               <input type="text" name="lastname" placeholder="Enter LastName" required><br><br>
                <label > Email Address</label><br>
                <input type="email" name="email" placeholder="Enter Email Address" required><br><br>
                <label > Password</label><br>
                <input type="password" name="password" placeholder="Enter Password" required><br><br>
                 <label > Confirm Password</label><br>
                 <input type="password" name="cpassword" placeholder="Confirm Password" required><br><br>
                 <input type="submit" name="submit" value="SignUp"  id="btn">
                
            </form>
        </div>  
    </body>
</html>
        

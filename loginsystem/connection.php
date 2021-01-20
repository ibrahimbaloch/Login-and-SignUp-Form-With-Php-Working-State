<?php
// Database Connection System Going Here 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Database Connection Finish Here

// Here Registration form data being store in database
if(isset($_POST['submit'])){
  $firstname =mysqli_real_escape_string($conn,$_POST['firstname']);
  $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);

  $sql = "SELECT email FROM registtb WHERE email = '{$email}'";

  $result = mysqli_query($conn, $sql) or die("Query Failed.");

  if(mysqli_num_rows($result) > 0){
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>Email Address  already Exists.</p>";
  }else{
      if($password==$cpassword){
    $sql1 = "insert into registtb (firstname, lastname, email, password, cpassword)
              VALUES ('{$firstname}','{$lastname}','{$email}','{$password}','{$cpassword}')";
    if(mysqli_query($conn,$sql1)){
        echo "Data inserted";
         header("Location:RegistrationForm.php");
  }}}}
  // Registration System Close Here
  
  
  // Login System Start Here
  
  // NOw User Login form can access 
  if(isset($_POST['login'])){
       $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  
    $sql2 = "SELECT email,password FROM registtb WHERE email = '{$email}' and password='{$password}'";

  $result = mysqli_query($conn, $sql2) or die("Query Failed.");

  if(mysqli_num_rows($result) > 0){
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>Email Address and password deosn't  Exists.</p>";
  }
 else {
     $sql12 = "SELECT email,password FROM registtb WHERE email = '{$email}' and password='{$password}'";   
   if($email=='email' && $password=='password'){
     if(mysqli_query($conn,$sql12)){
//        echo "Data inserted";
         header("Location:index.php");
   }}
 }
  
  
  }
  
  // Login System finsh Here 
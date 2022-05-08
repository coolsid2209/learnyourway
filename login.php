<?php
$servername="localhost";
$username="root";
$password="";
$database_name="login";
//create connection
$conn=mysqli_connect($servername,$username,$password,$database_name);
//initate the session
session_start();
//now check the connection
        if(!$conn)
         {
	           die("Connection Failed:" . mysqli_connect_error());

          }
         $name = mysqli_real_escape_string($conn, $_POST['name']);
         $email = mysqli_real_escape_string($conn, $_POST['email']);
         $password = mysqli_real_escape_string($conn, $_POST['pwd']);
       
         $sql = "select * from login_details where name = '$name' and email = '$email' and password = '$password'";  
         $result = mysqli_query($conn, $sql);  
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
         $count = mysqli_num_rows($result);  
              
         if($count == 1)
              {  
                  
                   $_SESSION['auth'] = 1;
                   $_SESSION['name'] = $row['name'];
                   header("location:home.php");
                   
                 
              }  
         else
              {  
                  echo "<h1> Login failed. Invalid username or password.</h1>";  
              }     
         
?>
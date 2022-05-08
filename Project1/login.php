<?php
$servername="localhost";
$username="root";
$password="";
$database_name="login";
//create connection
$conn=mysqli_connect($servername,$username,$password,$database_name);
//now check the connection
        if(!$conn)
         {
	           die("Connection Failed:" . mysqli_connect_error());

          }
    // $email = $_POST['email'];  
    // $password = $_POST['pwd'];  
            
        //to prevent from mysqli injection  
        //  $email = stripcslashes($email);  
        //  $password = stripcslashes($password);  
         $email = mysqli_real_escape_string($conn, $_POST['email']);
         $password = mysqli_real_escape_string($conn, $_POST['pwd']);
        //  $email = mysqli_real_escape_string($conn, $email);  
        //  $password = mysqli_real_escape_string($conn, $password);  
            
         $sql = "select * from login_details where email = '$email' and password = '$password'";  
         $result = mysqli_query($conn, $sql);  
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
         $count = mysqli_num_rows($result);  
              
         if($count == 1)
              {  
                  echo "<h1><center> Login successful </center></h1>";  
                 //echo "<a href="home.html"> </a>";
              }  
         else
              {  
                  echo "<h1> Login failed. Invalid username or password.</h1>";  
              }     
         
?>
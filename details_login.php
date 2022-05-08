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

if(isset($_POST['signup']))
{	
	 $name=$_POST['name'];
	 $email=$_POST['email'];
	 $pass= $_POST['pass'];
     $conpwd=$_POST['conpwd'];
     $sql_query = " INSERT INTO login_details (name,email, password, ConfirmPwd) VALUES ('$name','$email', '$pass', '$conpwd' ) ";
     if (mysqli_query($conn, $sql_query)) 
	    {
		        
            header("location:login.html");
	     } 
	 else
        {
		  echo 'connectivity problem ';
		  echo 'Error: ' . $sql_query . '' . mysqli_error($conn);
	     } 
	 mysqli_close($conn);
}
?>
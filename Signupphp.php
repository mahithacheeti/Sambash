<?php

$first_name=$_POST['f_name'];
$last_name=$_POST['l_name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$servername= 'localhost';
$usernamee= 'root';
$passwordd= '';
$db= 'chat_rooms';

$con=mysqli_connect($servername, $usernamee, $passwordd, $db);

if(!$con)
 echo 'Connection failed';

$sql="INSERT INTO users (first_name,last_name,email,username,password) VALUES('$first_name','$last_name','$email','$username','$password')";
$query=mysqli_query($con,$sql);

if($query)
   echo 'Sign Up successful';
else
   echo 'Sign Up failed';

mysqli_close($con);

?>



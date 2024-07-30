<?php
$username=$_POST['username'];
$password=$_POST['password'];

$servername= 'localhost';
$usernamee= 'root';
$passwordd= '';
$db= 'chat_rooms';

$con=mysqli_connect($servername, $usernamee, $passwordd, $db);

if(!$con)
 echo 'Connection failed';

$sql="SELECT * FROM users WHERE username='$username' && password='$password'";
$query=mysqli_query($con,$sql);
$start=mysqli_fetch_array($query);

if($query)
{
   session_start();
   $_SESSION['id'] = $start['user_id'];
   header('Location: Homepage.php');

}
else
   echo 'Login failed';

mysqli_close($con);

?>
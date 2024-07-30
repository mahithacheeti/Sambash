<?php
$name=$_POST['roomname'];
$about=$_POST['about'];
$slug=$_POST['slug'];

 $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];   
        $folder = "images/".$filename;
move_uploaded_file($tempname, $folder);

$servername= 'localhost';
$usernamee= 'root';
$password= '';
$db= 'chat_rooms';

$con=mysqli_connect($servername, $usernamee, $password, $db);

if(!$con)
 echo 'Connection failed';

$sql="INSERT INTO rooms (room_name,about,display_picture,slug) VALUES ('$name','$about','$filename','$slug')";
$query=mysqli_query($con,$sql);

if($query)
   echo 'New room created';
else
   echo 'Failed to create new room';

echo "Create Another Room <a href='room_creation.php'>Click here</a>";

mysqli_close($con);

?>
<?php

$servername= 'localhost';
$usernamee= 'root';
$passwordd= '';
$db= 'chat_rooms';

$con=mysqli_connect($servername, $usernamee, $passwordd, $db);

$rid = $_POST['rid'];
$uid = $_POST['uid'];
$msg = $_POST['msg'];
$date = date("Y-m-d");
$time = time();

$sql = "INSERT INTO rooms_messages VALUES (0,'$rid','$uid','$msg','$date','$time')"; 
$query=mysqli_query($con,$sql);

header("Location: chat_room.php?id=$rid");
 
?>
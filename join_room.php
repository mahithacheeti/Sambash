<?php
$uid = $_REQUEST['uid'];
$rid = $_REQUEST['rid'];

$servername= 'localhost';
$usernamee= 'root';
$passwordd= '';
$db= 'chat_rooms';

$con=mysqli_connect($servername, $usernamee, $passwordd, $db);

if(!$con)
 echo 'Connection failed';

$sql="INSERT INTO rooms_users VALUES ('$rid','$uid')";
$query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Join Room</title>
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<style>
 	*{
 		background-color:black;
 		text-align: center;
      font-family: 'Poppins', sans-serif;
 	}
     button{
     	   padding: 14px;
         border-radius: 16px;
         background-color: #fefe33;

     }
     a{
      text-decoration: none;
      color: black;
      background-color: #fefe33;
      font-weight: bold;
     }
     

	</style>
<body>
   <div class="join_room" style="width: 80%;margin: auto;">
      <!-- put room image here-->
        <?php 
            $que = "SELECT * FROM rooms WHERE room_id = $rid";
            $exe = mysqli_query($con,$que);
            $ans = mysqli_fetch_array($exe); ?>

      <img src="images/<?php echo $ans['slug']; ?>.png" style="height: 200px;"> 

      <h1 style="color:#fefe33"><b> Welcome to the <span style="color:white;"><?php echo $ans['room_name']; ?></span> Room </b></h1>

       <h3 style="color:#fefe33">About Room:</h3>
       <p style="color: white"><?php echo $ans['about'] ; ?></p>

        <h4 style="color:white;">Happy Learning!</h4>

        <button><a href="chat_room.php?id= <?php echo $rid; ?>">Join & Chat</a></button>

   </div>

</body>
</html>
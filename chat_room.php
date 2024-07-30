<?php
session_start();
$id=$_REQUEST['id'];

$servername= 'localhost';
$usernamee= 'root';
$password= '';
$db= 'chat_rooms';

$con=mysqli_connect($servername, $usernamee, $password, $db);

if(!$con)
 echo 'Connection failed';

$sql="SELECT * FROM rooms WHERE room_id='$id'";
$query=mysqli_query($con,$sql);
$room_row=mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title><?php echo $room_row['room_name']; ?></title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'><link rel="stylesheet" href="./stylee.css">

</head>
<body>
<!-- partial:index.partial.html -->


<div id="frame">
	<div id="sidepanel">
		<div id="profile">

			<div >
				<a href="Homepage.php" style="color: white;">HomePage</a>
				<!--<img id="profile-img" src="http://emilcarlsson.se/assets/mikeross.png" class="online" alt="" />-->
				<img src="<?php echo 'images/'. $room_row['slug'].'.png' ?>" alt="" style="width: 100%; "/>
				<h2 style="font-size: 30px; color: #fefe33;"><?php echo $room_row['room_name']; ?></h2><br>
				<h5 style="color: #ffffff;"><b><u>ABOUT:</u></b></h5><br><p><?php echo $room_row['about']; ?></p>
				
			</div>
		</div>
		<!--<div id="search">`
			<label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
			<input type="text" placeholder="Search contacts..." />
		</div>-->

		<div id="contacts">
			<ul>
			   <?php 
					$sql = "SELECT user_id FROM rooms_users WHERE room_id = $id"; 
	                $exe = mysqli_query($con,$sql);
	                     while($ans = mysqli_fetch_array($exe))
	                       {
	                       	    $idd = $ans['user_id'];
	                            $queryy = "SELECT * FROM users WHERE user_id = $idd";
	                            $exee = mysqli_query($con,$queryy);
	                            $anss = mysqli_fetch_array($exee); ?>
				<li class="contact">
				  <div class="wrap">

                    <?php 
                       if($anss['profile_picture']) { ?>
					    <img src="avatars/<?php echo $anss['profile_picture']; ?>">
					<?php }
					   else {?>
                         <img src="avatars/default.png">
					<?php } ?>

						<div class="meta">
							<p class="name"> <?php echo $anss['username']; ?> </p>
							<!--<p class="preview">You just got LITT up, Mike.</p>-->
						</div>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
		<!--<div id="bottom-bar">
			<button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
			<button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>
		</div>-->
	</div>
	<div class="content">
		
		<div class="messages">
			<ul>
				<?php

			    $q1="SELECT * FROM rooms_messages WHERE room_id='$id'";
                $exec=mysqli_query($con,$q1);
                 
                 while($roww=mysqli_fetch_array($exec))
                 {
                      if($roww['user_id']==$_SESSION['id'])
                      {  ?>
                         
                          <li class="replies">
					      <!--<img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />-->
					      <p><?php echo $roww['message']; ?></p>

				          </li>     		

                      <?php
                      }
                      else
                      {   ?>


					    <li class="sent">
						    
						    <p><?php echo $roww['message']; ?></p><br>
	                        <span style="padding-top: 50px !important;"> 
	                        	<?php 
					                $idd = $roww['user_id'];
					                $queryy = "SELECT username FROM users WHERE user_id = $idd";
					                $exee = mysqli_query($con,$queryy);
					                $anss = mysqli_fetch_array($exee);
					                echo $anss['username']; 
					            ?> 
					        </span>

					    </li>

                      <?php
                      }

                 }

				?>

				
				
			</ul>
		</div>

		<div class="message-input">
			<div class="wrap">
				<form method="POST" action="msg_insertion.php">
                    <input type="number" value="<?php echo $id; ?>" name="rid" style="display: none;">
                    <input type="number" value="<?php echo $_SESSION['id']; ?>" name="uid" style="display: none;">
					<input type="text" placeholder="Write your message..." name="msg"/>
					<!--<i class="fa fa-paperclip attachment" aria-hidden="true"></i>-->
					<input type="submit" value="submit">
			    </form>
			</div>
		</div>

	</div>
</div>
<!-- partial -->
  <script src='https://use.typekit.net/hoy3lrg.js'></script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="./script.js"></script>

</body>
</html>

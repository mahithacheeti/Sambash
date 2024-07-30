<!DOCTYPE html>
<html>

<head>
	<title>Home Page</title>
	<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style type='text/css'>

* {
 margin: 0px;
 padding: 0px;
 box-sizing: border-box;
 font-family: 'Poppins' sans-serif;

}


section {
		position: relative;
		width: 100%;
		min-height: 15vh;
		padding-top: 0px;
        padding-left:100px;
        padding-right:150px;
		display: flex;
		justify-content: space-between;
		align-items: center;
		background:   #000000;
		transition: 0.5s;
	}

	header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 10px 80px;
            display: flex;
            background-color: #0A1612
            justify-content: space-between;
            align-items: center;
           
          }
img {
  padding: 0px;
  width: 100px;
  margin-left:0px;
}

          header.logo {
        
                   width:500px;
    padding:0px;
    margin-left:0px;
    margin-top:0px;
    
    width: 800px; /* width of container */
    height: 800px;

               }
     header.logo_text{
                 color: #fff;
                 font-weight: 600;
                 font-size:20px;


             }

    

         header ul {
         	        position: relative;
         	        display: flex;
                    padding-left: 400px;
                    padding-right: 20px;

         }

         header ul li {
                   list-style: none;
         }

         header ul li a {
         	display: inline-block;
         	color: #fff;
         	font-weight: 400;
         	margin-left: 50px;
         	text-decoration: none;
            font-size:20px;
         }



.card-body {

	box-shadow: 0 0 20px 7px rgb(0,0,0,0.1);
}

.card {
 margin: 20px 10px;
}

.card-body a {
	color: #0c7f90;
	text-decoration: none;
	font-size: 15px;
	margin-top: auto;

}

.btn {
   background-color: black;
}

.btn a{
	color: white;
}

.btn:hover{
   background-color: #fefe33;
}
.btn:hover a{
	color: black;
}

/*.abc {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	position: relative;
	left: 30px;
	border: 3px solid #73AD21;


}

.container {
	flex: 1 1 150px;
	margin: 5px;
}*/


/*.flexwrap {
	border: 3px solid #fff;
    padding: 20px;

}*/

.gridwrap {
	width: 30%;
    float: left;
    justify-content: center;
    align-content: center;
    padding-left: 100px;
    padding-right: 50px;
    padding-top: 20px; 

}


</style>
</head>

<body>

     <section class="sec">   
		<header>
        
        <div class="logo">
			<a href="#"><img src="logo.png"></a>
        </div>
            
			<ul>
				<li><a href="#">About</a></li>
				<li><a href="#">Team</a></li>
                 <li><a href="#">Help Center</a></li>
                 <li><a href="#">Contact</a></li>
                 <li><a href="#">Privacy policy</a></li>
               </ul>
               <hr>
			
		</header>	
    </section>
    <br>

  <?php 

  $servername= 'localhost';
  $usernamee= 'root';
  $password= '';
  $db= 'chat_rooms';

  $con=mysqli_connect($servername, $usernamee, $password, $db);

	if(!$con)
	 echo 'Connection failed';

	$sql='SELECT * FROM rooms';
	$query=mysqli_query($con,$sql);

	while($row=mysqli_fetch_array($query))
     {
	  
		?> 
		
		<div class='gridwrap'>
		<div class='container'> 
		<div class='row'>
		<div class='col-sm-4'>
		<div class='card' style='width: 18rem;'>
	    <a href="chat_room.php?id=<?php echo $row['room_id']; ?>"><img src="  <?php echo 'images/'. $row['slug'].'.png' ?>  " class='card-img-top' alt='...'></a>
	    <div class='card-body'>
	    <h5 class='card-title'>  <?php echo $row['room_name'] ?>  </h5>
	    <p class='card-text'>  <?php echo $row['about'] ?>  </p>
	    <div class='btn'><a href="chat_room.php?id=<?php echo $row['room_id']; ?>">Join</a></div>
	    </div>
	    </div>
	    </div>
	    </div>
	    </div>
	</div>
	   <?php
	  
	 }

  ?>
<br>
   
   <!--<div class="footer-whole">
    <footer class="footer">
        <div class="container1">
            <div class="roww">
                <div class="footer-col">
                    <h4><b>Company</b></h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our team</a></li>
                        <li><a href="#">careers</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4><b>get help</b></h4>
                    <ul>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">contact us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4><b>policies</b></h4>
                    <ul>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">content policy</a></li>
                        <li><a href="#">community guidelines</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4><b>follow us</b></h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            
            </div>
        </div>
        
    </footer>
  </div>-->


</body>

</html>
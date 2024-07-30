<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chatroom Landing Page</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	</head>
 	 <style>
 	 /***************header********************/
		* {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins' sans-serif;

	}

	section {
		position: relative;
		width: 100%;
		min-height: 100vh;
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

         /*****************signup******************/
        
        .abc{
margin-left: 15px;
margin-right: 25px;
margin-top: 100px;
margin-bottom:50px;
padding-top:20px;
padding-left:40px;
padding-right:40px;
padding-bottom:20px;
border-top: 1px solid rgba(255, 255, 255, 1);
border-bottom: 1px solid rgba(255, 255, 255, 1);
border-left: 1px solid rgba(255, 255, 255, 1);
border-right: 1px solid rgba(255, 255, 255, 1);
position:relative;
left:60px;
float:left
}
.btn {
background-color: #fefe33;
  color: black;


}
.btn:hover {
  background-color: white;
  color: black;
  
  
}
.text{
  padding-left: 60px;
}

a {
        color: yellow;
      }

  a:hover{
    color:white;
  }
  
   img {
  padding: 5px;
  width: 90px;
  margin-left:0px;
}
  .container{

    
    padding:5px;
    margin-left:0px;
    margin-top:20px;
    
    width: 600px; /* width of container */
    height: 600px; /* height of container */
    overflow: hidden;



    }
    .abcd {
      position: relative;
          width: 100%;
          display: flex;
          justify-content: space-between;
          align-items: center;
          margin-top:40px;
          

    }
       /******************footer********************/

 	 		@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,200&display=swap');

        body{
           line-height: 1.5;
           font-family: 'Poppins', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        .content {
            max-width: 1170px;
            margin: auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        ul {
            list-style: none;
            padding-left: 0px;
        }
	.footer {
            background-color: white;
            padding: 50px 200px;
        }
        .footer-col {
            width: 25%;
            padding: 0 15px;
        }
        .footer-col h4 {
            font-size: 18px;
            color: #000000;
            text-transform: capitalize;
            margin-bottom: 30px;
            font-weight: 500;
            position: relative;
            

        }
         .footer-col h4::before{
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #fefe33;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
         }

         .footer-col ul li:not(:last-child){
            margin-bottom: 10px;
         }

         .footer-col ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #000000;
            display: block;
            transition: all 0.3s ease;
         }

          .footer-col ul li a:hover{
            color: #000000;
            padding-left: 10px;
          }
          .footer-col .social-links a{
                display: inline-block;
                height: 40px;
                width: 40px;
                background-color: rgba(255,225,255,0.2);
                margin-right: 0 10px 10px 0;
                text-align: center;
                line-height: 40px;
                border-radius: 50%;
                color: #000000;
                transition: all 0.5s ease;
          }
          .footer-col .social-links a:hover{
             color: #24262b;
             background-color: #fefe33;
          }

          /*responsive*/

          @media(max-width: 767px){
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
            }
        }

             @media(max-width: 574px){
            .footer-col {
                width: 100%;
                
            }

          }
	
  	</style>
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

		<div class="abcd">
  <div class="row">
    <img class="container" src="image2.png">
</div>
<form method='post' action='#'>
<div class="abc">
  <h2 style="color:#fefe33"><b>Sign Up</b></h2><br>
  <div class="mb-3">
    <label class="form-label" style="color:white">First Name</label>
    <input type="text" placeholder="Enter First Name" class="form-control" id="exampleInputEmail1" name="f_name">
  </div>

   <div class="mb-3">
    <label class="form-label" style="color:white">Last Name</label>
    <input type="text" placeholder="Enter Last Name" class="form-control" id="exampleInputEmail1" name="l_name">
  </div>

   <div class="mb-3">
    <label class="form-label" style="color:white">Email</label>
    <input type="Email" placeholder="Enter Email" class="form-control" id="exampleInputEmail1" name="email">
  </div>

   <div class="mb-3">
    <label class="form-label" style="color:white">Username</label>
    <input type="text" placeholder="Enter Username" class="form-control" id="exampleInputEmail1" name="username">
  </div>

  <div class="mb-3">
    <label class="form-label" style="color:white">Password</label>
    <input type="password" placeholder="Enter Password" class="form-control" id="exampleInputPassword1" name="password">
  </div>

  <button type="submit" class="btn">Submit</button>
  <span class="text" style="color:white">Already have an account?<a href="landingpage3.php">Login here</a></span>
      

</div>
</form>
</div>
</section>
<br>

		<div class="footer-whole">
    <footer class="footer">
        <div class="content">
            <div class="row">
                <div class="footer-col">
                    <h4><b>Company</b></h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our team</a></li>
                        <li><a href="#">careers</a></li>
                        <!--<li><a href="#">affiliate program</a></li>-->
                    </ul>
                </div>
                <div class="footer-col">
                    <h4><b>get help</b></h4>
                    <ul>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">contact us</a></li>
                        <!--<li><a href="#">payment options</a></li>-->
                    </ul>
                </div>
                <div class="footer-col">
                    <h4><b>policies</b></h4>
                    <ul>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">content policy</a></li>
                        <li><a href="#">community guidelines</a></li>
                        <!--<li><a href="#">dress</a></li>-->
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
   </div>

	
	</body>
	</html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Log Out</title>
	<style>
		
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
         	margin-left: 90px;
         	text-decoration: none;
            font-size:20px;
         }
  .btn  {
        	background-color: #fefe33;
        	color: black;
            margin-left:80px;
            font-size:18px;
            padding-left:5px;
            padding-right:5px;
            padding-bottom:0px;
            padding-top:0px;
            border-radius:5px;


        }
        .btn:hover{
			color: black;
			background-color:#ffffff;
		}
   		a {
   			color: yellow;
   		}

	a:hover{
		color:white;

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
                 <li><a href="#">Profile</a></li>
                 <li><button type="logout" class="btn"><b>Log Out</b></button>
                 	<span class="text" style="color:white"></span></li>
  
             
             
	                           
               </ul>
               <hr>
			
		</header>

	</section>


	</body>
</html>
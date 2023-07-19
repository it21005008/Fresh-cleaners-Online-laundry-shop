<?php
include 'config.php';
?>

<? php
SESSION_START();
if(!isset($_SESSION["username"]))
{
    header("location:login.php");
}
?>



<!DOCKTYPE html>
<html>
	<head>
			<link rel = "stylesheet" href = "styles/Home_styles.css"/>
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
			<title>FRESH CLEANERS</title>
			<script type= "text/javascript" src="js/HomePage_JavaScript.js"> 
			</script>
			
	</head>
	<body>
	
		<div class="hero">

		


			<video autoplay loop muted class="back-video"> 
				<source src="images/HomePage/bgimg/video.mp4" type="video/mp4">
			</video>



			<header>
	
	
				<a href="#" class="logo_main"><img src="images/Homepage/logoHome.png"></a>
					  <ul>
						<li> <a href="#"> HOME </a> </li>
						<li> <a href="Services.html">SERVICES</a></li>
						<li> <a href="about.html">ABOUT US</a></li>
						<li> <a href="contactUs.php">CONTACT US </a></li>
						
						<button type="button" class="homephp" > <span><a href="update_profile.php">My Account </a></span> </button>
						<button type="button" class="homephp" ><span><a href="home.php">Logout</a></span> </button>
		
						<a href="store.html"><button type="button" class="buttonHead"><img src="images/Homepage/scart.png"></button></a>
					  </ul>
			
					
					  
		
					  </header>
		<section class="banner"></section>
			<script type="text/javascript">
				window.addEventListener("scroll",function(){
					var header = document.querySelector("header");
					header.classList.toggle("sticky", window.scrollY > 0);
			 
			
				})
			</script>


	
</div>
				<div class="content">
						  <div class="container2">
							<form action="" class="Searchbar">
								<input type="text" placeholder="Search" name="q">
								<button type="submit"><img src="images/Homepage/search.png"></button>
							</form>
							
							</div>


						
					</div>
		


		
		<div class="bodyimage">
			<img class="bodyimage" id="bimage"  src="images/HomePage/bgimg/bimg1.jpg">


		</div>
		<div class="newslay">
			
			<button class="bttn1" type="button" id="btn1" onclick="loadData('btn1')"> </button>
			<button class="bttn1" type="button" id="btn2" onclick="loadData('btn2')"> </button>
			<button class="bttn1" type="button" id="btn3" onclick="loadData('btn3')"> </button>
			
	
		</div>
<!-------------Navigation to categories ------
		<br><br>

		<div class="container3">
			<div class="nvimg">
				<a href="bags.html">
				<img src="images/Homepage/bagClean_Img.png">
			</a>
			</div>
			<div class="nvimg">
				<img src="images/Homepage/ShoeClean_Img.png">
			</div>
			<div class="nvimg">
				<img src="images/Homepage/Carpetclean_Img.png">
			</div>
			<div class="nvimg">
				<img src="images/Homepage/DryClean_Img.png">
			</div>
			<div class="nvimg">
				
			</div>
		</div>
		<br><br>
	
		<hr><br> 
		-------Navigation to categories  End---------->

		<img src="images/HomePage/bgimg/pricelist.png" alt="pricelist" class="bodyimage">

		<button type="button" class="buttonprice"><a href="store.html">See All Price</a></button>
		

<!-------------------------------Footer------------------------------------->

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col">
			<h5>company</h5>
				<ul>
					<li><a href="#">about us</a></li>
					<li><a href="#">our services</a></li>
					<li><a href="#">privacy policy</a></li>
					
				</ul>
			</div>
			<div class="footer-col">
			 <h5>get help</h5>
				<ul>
					<li><a href="feedback.html">Feedback</a></li>
					<li><a href="#">order status</a></li>
					<li><a href="#">payment options</a></li>
				 <img class="pay" src ="images/Homepage/pay.png">
				</ul>
			
			</div>
			<div class="footer-col">
				<h5>site Map</h5>
				<ul>
					<li><a href="store.html">Cloths</a></li>
					<li><a href="store.html">Shoes</a></li>
					<li><a href="store.html">Bags</a></li>
					<li><a href="store.html">Curtains</a></li>
					<li><a href="store.html">Bed Sheet</a></li>
				 <li><a href="store.html">Carprts</a></li>
				 <li><a href="store.html">Dry cleaning</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h5>find us on social media</h5>
				<div class="social-links">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
		</div>
	</div>
  <br><hr class="f2">
 <p class="f3"> ©2022 freshcleeaners.com All Rights Reserved.

</footer>
<!---------------------------------------Footer End---------------------------------------->


	</body>
	</html>
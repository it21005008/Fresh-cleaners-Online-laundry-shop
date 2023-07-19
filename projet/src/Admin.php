<?php
include 'config.php';


?>

<!DOCKTYPE html>
<html>
	<head>
			<link rel = "stylesheet" href = "styles/styles.css"/>
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
			<title>FRESH CLEANERS</title>
			<script type= "text/javascript" src="js/HomePage_JavaScript.js"> 
			</script>
			
	</head>
	





<!---------------------------Navigation bar------------------------------------------->
<header>
	
	
		<a href="#" class="logo_main"><img src="images/Homepage/logoHome.png"></a>
			  <ul>
				<li> <a href="#"> HOME </a> </li>
				<li> <a href="Services.html">SERVICES</a></li>
				<li> <a href="About.html">ABOUT US</a></li>
				<li> <a href="Contact.html">CONTACT US </a></li>
			
				<a href="login.html" class="account"><img src="images/Homepage/accountImg.png"></a>

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


<!-------------------------Navigation bar 1 end--------------------------------------->


 


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
  	 				<li><a href="#">Feedback</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment options</a></li>
					<img class="pay" src ="images/Homepage/pay.png">
  	 			</ul>
  	 		
  	 		</div>
  	 		<div class="footer-col">
  	 			<h5>site Map</h5>
  	 			<ul>
  	 				<li><a href="#">Cloths</a></li>
  	 				<li><a href="#">Shoes</a></li>
  	 				<li><a href="#">Bags</a></li>
  	 				<li><a href="#">Curtains</a></li>
  	 				<li><a href="#">Bed Sheet</a></li>
					<li><a href="#">Carprts</a></li>
					<li><a href="#">Dry cleaning</a></li>
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

<?php
include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <meta name="viewport" content="width=device-width, initial scale=1.0">
   <title> Contact Us Page </title>
   <link rel="stylesheet" href="styles/contactstyle.css">
   <link rel = "stylesheet" href = "styles/Home_styles.css"/>
</head>
<body>


<header>
	
	
				<a href="index.html" class="logo_main"><img src="images/Homepage/logoHome.png"></a>
					  <ul>
						<li> <a href="#"> HOME </a> </li>
						<li> <a href="Services.html">SERVICES</a></li>
						<li> <a href="about.html">ABOUT US</a></li>
						<li> <a href="contactUs.php">CONTACT US </a></li>
					
						<a href="login.php" class="account"><img src="images/Homepage/accountImg.png"></a>
		
						<button type="button" class="buttonHead"><img src="images/Homepage/scart.png"></button>
					  </ul>
			
					
					  
		
			</header>
		
			<script type="text/javascript">
				window.addEventListener("scroll",function(){
					var header = document.querySelector("header");
					header.classList.toggle("sticky", window.scrollY > 0);
			 
			
				})
			</script>





  <div class="contactUs">
    <div class="title" >
      <br><br> <br><br> <br><br> <br><br> 
        <h2>Reach To Us</h2>
    </div>
    <div class="box">
      <!-- form -->
      <div class="contact form">
        <h3>Send a Message</h3>
        <form action="contactSubmit.php" method="POST">
          <div class="formBox">
            <div class="row50">
              <div class="inputBox">
                <span>First Name</span>
                <input type="text" placeholder="John" name="firstname" required>
              </div>  
              <div class="inputBox">
                <span>Last Name</span>
                <input type="text" placeholder="Doe"  name="lastname" required>
              </div>
            </div>  

            <div class="row50">
              <div class="inputBox">
                <span>Email</span>
                <input type="text" placeholder="johndoe@email.com"  name="email" required>
              </div>  
              <div class="inputBox">
                <span>Mobile</span>
                <input type="number" placeholder="+94 777123456"  name="number" required>
              </div>
            </div>

            <div class="row100">
              <div class="inputBox">
                <span>Message</span>
                <input type="text" placeholder="Type your message here..."  name="message" required></textarea>
              </div>  
            </div> 

            <div class="row100">
              <div class="inputBox">
                <input type="submit" value="Send"  name="contactSubmit">
              </div>  
            </div> 
          </div>
        </form>
  
      </div>

      <!-- info box -->
      <div class="contact info">
        <h3>Contact Info</h3>
        <div class="infoBox">
          <div>
            <span><ion-icon name="location"></ion-icon></span>
            <p>Wehera, Kurunegala <br> Sri Lanka</p>
          </div>
          <div>
            <span><ion-icon name="mail"></ion-icon></span>
            <a href="mailto:freshcleaners@gmail.com">freshcleaners@gmail.com</a>
          </div>
          <div>
            <span><ion-icon name="call"></ion-icon></span>
            <a href="tel:+94 777123456">+94 777123456</a>
          </div>
          <!-- social media links -->
          <ul class="sci">
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
          </ul>
        </div>
      </div>

      <!-- map -->
      <div class="contact map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31647.628605004284!2d80.35384!3d7.470379!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae33a302c2a455b%3A0x963cc0c355e7375a!2sWehera%20West%2C%20Kurunegala!5e0!3m2!1sen!2slk!4v1651779542627!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div> 
  </div>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

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
         <img class="pay" src ="images/HomePage/pay.png">
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

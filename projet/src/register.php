<?php

include 'config.php';

if(isset($_POST['submit'])){

   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $lname = mysqli_real_escape_string($conn, $_POST['lname']);
   $uname = mysqli_real_escape_string($conn, $_POST['uname']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $cnumber = mysqli_real_escape_string($conn, $_POST['cnumber']);
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'images/uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(fname, lname, uname, email, address, password, image, cnumber) VALUES('$fname','$lname','$uname', '$email','$address', '$pass', '$image', '$cnumber')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:login.php');
         }else{
            $message[] = 'registeration failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html>
<head>
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styles/lstyle.css" type="text/css">

   <script src="registrationjs.js"></script>

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" onsubmit="return checkPassword()" enctype="multipart/form-data">
      <h3>register now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
 <label class="lb">First Name : </label>
                <br>
                <input type="text" name="fname" class="box" placeholder="Enter Your First Name" required>
                <br>
                <br>
               
                <label class="lb">Last Name : </label>
                <br>
                <input type="text" name="lname" class="box" placeholder="Enter Your Last Name" required>
                <br>
                <br>
            
                <label class="lb">User Name :</label>
                <br>
                <input type="text" name="uname" class="box" maxlength="8" placeholder="Enter Your User Name" required>
                <br>
                <br>
              
                <label class="lb">Password : </label>
                <br>
                <input type="password" id="password" name="password" class="box" placeholder="Create Password" required>
                <br>
                <br>
              
                <label class="lb">Confirm Password : </label>
                <br>
                <input type="password" id="cpassword" name="cpassword" class="box" placeholder="Enter Again password" required>
                <br>
                <br>
                <label class="lb">E mail : </label>
                <br>
                <input type="email" name="email" class="box" placeholder="Enter Your Email" required>
                <br>
                <br>
             
                <label class="lb">Address : </label>
                <br>
                <textarea type="text area" name="address" class="box" placeholder="Enter Your Address" cols="40" rows="5" required></textarea>
                <br>
                <br>
               
                <label class="lb">Contact Number : </label>
                <br>
                <input type="phone" name="cnumber" class="box" placeholder="Enter Your Number" pattern="[0-9]{10}" required>
                <br>
                <br>
                <label>Gender : </label>
                <br>
              
                <input type="radio" name="gender" id="male" value= "m">
               
                <span id="male">Male</span>
              
                <input type="radio" name="gender" id="female" value= "f">
              
                <span id="female">Female</span>
                <br>
                <br>
              
                <input type="checkbox" class="inputStyle" id="checkBox" onclick="enableButton()">
                <label>Yes,I agree Terms and condition</label>
                <br>
                <br>
                <label class="lb">Profile image : </label>
                <br>
                
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" name="submit" value="register now" class="btn" id="submitBtn" disabled>
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

</body>
</html>
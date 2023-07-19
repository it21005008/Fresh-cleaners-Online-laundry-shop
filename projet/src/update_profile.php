<?php

include 'config.php';
//session_start();
$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){

   $update_uname = mysqli_real_escape_string($conn, $_POST['update_uname']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);

   mysqli_query($conn, "UPDATE `user_form` SET uname = '$update_uname', email = '$update_email' WHERE id = '$user_id'") or die('query failed');

   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'old password not matched!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "UPDATE `user_form` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
         $message[] = 'password updated successfully!';
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `user_form` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'image updated succssfully!';
      }
   }

}

?>

<!DOCTYPE html>
<html>
<head>
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styles/lstyle.css" type="text/css">
   <link rel="stylesheet" href="styles/Home_styles.css">

</head>
<body>
   
<!-----------------------------------header--------------------------------------->

<header>
	
	
   <a href="#" class="logo_main"><img src="images/Homepage/logoHome.png"></a>
         <ul>
           <li> <a href="#"> HOME </a> </li>
           <li> <a href="Services.html">SERVICES</a></li>
           <li> <a href="about.html">ABOUT US</a></li>
           <li> <a href="contactUs.php">CONTACT US </a></li>
       
           <a href="home.php" class="account"><img src="images/Homepage/accountImg.png"></a>

           <a href="store.html"><button type="button" class="buttonHead"><img src="images/Homepage/scart.png"></button></a>
         </ul>

       
         

</header>
<script type="text/javascript">
   window.addEventListener("scroll",function(){
       var header = document.querySelector("header");
       header.classList.toggle("sticky", window.scrollY > 0);


   })
</script>


<!-----------------------------------header  end--------------------------------------->






<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if($fetch['image'] == ''){
            echo '<img src="images/user/avater.jpg">';
         }else{
            echo '<img src="images/uploaded_img/'.$fetch['image'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>username :</span>
            <input type="text" name="update_uname" value="<?php echo $fetch['uname']; ?>" class="box">
            <span>your email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
            <span>update your pic :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span>old password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>new password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>
      <input type="submit" value="update profile" name="update_profile" class="btn">
      <a href="home.php" class="delete-btn">go back</a>
   </form>

</div>







</body>
</html>
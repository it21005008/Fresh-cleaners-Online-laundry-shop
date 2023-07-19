<?php
include 'config.php';
?>
<?php 



if(isset($_POST['checkout'])){


	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$province = $_POST['province'];
	$zipcode = $_POST['zipcode'];
	$card = $_POST['card'];
	$exp = $_POST['exp'];
	$year =$_POST['year'];
	$cvv = $_POST['cvv'];



    $sql= "INSERT INTO checkout(name,email,address,city,province,zipcode,card,exp,year,cvv) VALUES ('$name','$email','$address','$city','$province','$zipcode','$card','$exp','$year','$cvv');";
    mysqli_query($conn ,$sql);

	echo "<script> alert('Checkout process is successfully...') </script>";
	header("location:index.php");
}
	


?>
<?php
include 'config.php';
?>
<?php 



if(isset($_POST['contactSubmit'])){


	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$message = $_POST['message'];


    $sql= "INSERT INTO contactus(firstname,lastname,email,number,message) VALUES ('$firstname','$lastname','$email','$number','$message');";
    mysqli_query($conn ,$sql);

    echo "<script> alert('Submitted successfully....') </script>";
	header("Location:index.php");

}
	


?>
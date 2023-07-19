<?php
include 'config.php';
?>

<?php


$FirstName  = $_POST['FirstName'];
$LastName   = $_POST['LastName'];
$UserName   = $_POST['UserName'];
$Password   = $_POST['Password'];
$Email      =$_POST['Email'];
$Address    = $_POST['Address'];
$Number     = $_POST['Number'];


            $reg = "INSERT INTO registration(FirstName, LastName, UserName,Password,Email,Address,Number) VALUES('$FirstName', '$LastName ', '$UserName','$Password','$Email','$Address','$Number')";
            $upload = mysqli_query($conn ,$reg);
            header("location:login.php");


?>




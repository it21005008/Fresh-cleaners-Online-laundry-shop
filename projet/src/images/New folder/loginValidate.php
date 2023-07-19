<?php
include 'config.php';
?>



<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=$_POST["username"];
$password=$_POST["password"];

$sql="SELECT * FROM logindetails WHERE username='".$username."' AND L_Password='".$password." '  ";



$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);


if($row["L_Type"]=="user"){
    $_SESSION["username"]=$username;

    header("location:index.php");
}

else if($row["L_Type"]=="admin")
{
    $_SESSION["username"]=$username;

    header("location:Admin.html");

}
else {
    
    echo "<script> alert('username or password incorect.') </script>";
    header("location:login.php");

}


}
?>

<?php
include 'config.php';
?>

<?php

if(isset($_POST['feedback'])){

    $Fullname =$_POST['Fullname'];
    $Email =$_POST['email'];
    $Age = $_POST['age'];
    $Phone = $_POST['phone'];
    $Message = $_POST['message'];
    

                $sql = "INSERT INTO feedback(Fullname,email,age,phone,message) VALUES('$Fullname', '$Email', '$Age','$Phone','$Message');";
                mysqli_query($conn ,$sql);
                
                 echo "nice";
                header("Location:index.php");
 
                }



?>








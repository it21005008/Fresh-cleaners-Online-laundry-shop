 <?php
 session_start();

 
 $un=isset($_POST['uname'])?$_POST['uname']:"";
 $pw=isset($_POST['password'])?$_POST['password']:"";
 
 if($un=="test" && $pw=="1234"){
	 
$_SESSION['uname']=$un;	 
header("Location:welcome.php");	 
 }
 else{
	 echo "username or password incorrect";
 }
 ?>
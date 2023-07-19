<?php
$FirstName  = $_POST['fname'];
$LastName   = $_POST['lname'];
$UserName   = $_POST['uname'];
$Password   = $_POST['password'];
$Address    = $_POST['address'];
$Number     = $_POST['cnumber'];
$Gender     = $_POST['gender'];

//Database connection
$conn = new mysqli('localhost','root',' ','FC');
if($conn->connect_error)
{
    die('Connection Failed :'.$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into Registration(FirstName, LastName, UserName, Password, Address, Number, Gender) values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssis",$FirstName, $LastName, $UserName, $Password, $Address, $Number, $Gender);
    $stmt->execute();
    echo "Registration Succuessfully.....";
    $stmt->close();
    $conn->close();
}

?>
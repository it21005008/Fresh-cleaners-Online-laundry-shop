<?php
$fname     = $_POST['fname'];
$lname     = $_POST['lname'];
$uname     = $_POST['uname'];
$password  = $_POST['password'];
$email     = $_POST['email'];
$address   = $_POST['address'];
$cnumber   = $_POST['cnumber'];
$gender    = $_POST['gender'];

//Database connection
$conn = new mysqli('localhost','root','','FC');
if($conn->connect_error)
{
    die('Connection Failed :'.$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into Registration(fname, lname, uname, password, email, address, cnumber, gender) values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssis",$fname, $lname, $uname, $password, $email, $address, $cnumber, $gender);
    $stmt->execute();
    echo "Registration Succuessfully.....";
    $stmt->close();
    $conn->close();
}

?>
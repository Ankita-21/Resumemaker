<?php
session_start();
header ('location: loginb.html');
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$con = mysqli_connect('localhost', 'root','','profile') or die(mysqli_connect_error($con));
$s = "select * from rm_signup where email='$email'" ;
$x = mysqli_query($con, $s);
$num = mysqli_num_rows($x);
if($num==1) {echo "Email already registered.";  }
else {
    $sql = "INSERT INTO `rm_signup` (`name`, `email`, `contact`, `password`) VALUES ('$name','$email', '$contact', '$password')";
$result = mysqli_query($con, $sql);
echo "User successfully inserted.";
} 
?>
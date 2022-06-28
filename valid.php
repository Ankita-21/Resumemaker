<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$con = mysqli_connect('localhost', 'root','','profile') or die(mysqli_connect_error($con));
$s = "select * from rm_signup where email='$email' && password = '$password'" ;
$x = mysqli_query($con, $s);
$num = mysqli_num_rows($x);
if($num==1) {
    header ('location: avis.html');  }
else {
echo "Wrong Credential.";
} 
?>
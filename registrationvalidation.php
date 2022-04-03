<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','win021096');

mysqli_select_db($con, 'icct_system');

$email = $_POST['email'];
$password = $_POST['password'];
$conpassword = $_POST['conpassword'];
$title = $_POST['title'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$added_at = $_POST['added_at'];

$s = "select * from teacher_account where first_name = '$first_name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
echo " Username Already Taken";
}else{
$reg = "insert into teacher_account(email, password, conpassword, title, first_name, last_name, added_at) values ('$email' , '$password' , '$conpassword', '$title', '$first_name', '$last_name', '$added_at')";
mysqli_query($con, $reg);
echo "Registration Successful";
}
?>
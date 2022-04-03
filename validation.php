<?php

session_start();


$con = mysqli_connect('localhost','root','win021096');

mysqli_select_db($con, 'icct_system');

$email = $_POST['email'];
$password = $_POST['password'];
$first_name = $_POST['first_name'];




$s = "select * from teacher_account where email = '$email' && password ='$password'";


$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
    $_SESSION['username']= $first_name;
    header('location:home.html');
}
else{
header('location:login.php');
}
?>
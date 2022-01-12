<?php
$dbcon = mysqli_connect("localhost","root","","gym_management");
$id=$_POST['id'];
$name=$_POST['name'];
$user_name=$_POST['user_name'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$age=$_POST['age'];
$adress=$_POST['address'];
$gender=$_POST['gender'];
$fee=$_POST['fee'];
$time=$_POST['time'];
$sql="insert into client_details values('$id','$name','$user_name','$mail','$password',$phone,$age,'$address','$gender',$fee,'$time')";
mysqli_query($dbcon,$sql);
echo mysqli_error($dbcon);
header("location:trainer_home.php");
?>
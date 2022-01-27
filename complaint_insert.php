<?php
$dbcon = mysqli_connect("localhost","root","","gym_management");
$id=$_POST['id'];
$complaint=$_POST['complaint'];
$sql="insert into complaints values ('$id','$complaint')";
mysqli_query($dbcon,$sql);
echo mysqli_error($dbcon);
header("location:client_home.php");
?>
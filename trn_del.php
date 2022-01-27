<?php
$dbcon = mysqli_connect("localhost","root","","gym_management");
$id=$_POST["id"];
$u_name = $_POST["u_name"];
$sql = "DELETE FROM `trainer_details` WHERE id = '$id';";
mysqli_query($dbcon,$sql);
echo mysqli_error($dbcon);
header("location:trainer_details.php");
?>
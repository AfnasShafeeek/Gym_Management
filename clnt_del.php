<?php
$dbcon = mysqli_connect("localhost","root","","gym_management");
$id=$_POST["id"];
$u_name = $_POST["u_name"];
$sql = "DELETE FROM `client_details` WHERE id = '$id' AND user_name = '$u_name' ;";
mysqli_query($dbcon,$sql);
echo mysqli_error($dbcon);
header("location:clients_details.php");
?>
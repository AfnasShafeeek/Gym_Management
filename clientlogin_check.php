<?php
$dbcon = mysqli_connect("localhost","root","","gym_management");
if(isset($_POST['submit']))
{
  $id=$_POST['id'];
  $name=$_POST['user_name'];
  $password=$_POST['password"'];
  $sql="SELECT COUNT(*) AS total FROM `client_details` WHERE id - '".$id."' AND password = '".$password."'";
  $result = mysqli_query($dbcon,$sql) or die(mysqli_error($dbcon));
  $rw =  mysqli_fetch_array($result);
  if($rw['total'] > 0){
    echo "<script>alert('username and password are correct')</script>";
    header("Location:client_home.php");
  }else{
    echo "<script>alert('username and password are incorrect')</script>";
    header("Location:clientlogin.php");
  }
}
?>
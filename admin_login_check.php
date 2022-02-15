<?php


$conn=mysqli_connect("localhost","root","","gym_management");
$msg="";
if (isset($_POST['submit'])){

    $name=$_POST['uname'];
    $pass=$_POST['pass'];
    if($name=='admin' && $pass=='12345'){
              
        header("location:admin_home.php");
    }
    else{
            echo'<script>alert("Incorect username and password ");</script>';
              header("location:admin_login.php");
            }

    

}


?>
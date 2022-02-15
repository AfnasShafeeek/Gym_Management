<?php


$conn=mysqli_connect("localhost","root","","gym_management");
$msg="";
if (isset($_POST['submit'])){
  //  $id-$_POST['id'];
    $name=$_POST['user_name'];
    $pass=$_POST['password'];
    if($name=='' && $pass==''){
              
           header("location:admin_login.php");
    }
    else{
            
             $sql="SELECT * FROM trainer_details WHERE id ='$id' && user_name='$name' && password='$pass'";
             $result=mysqli_query($conn,$sql);
                    
            if(mysqli_num_rows($result))
            {     session_start();
                $_SESSION['uname']=$name;
                
                header("location:trainer_home.php");
                echo'<script>alert("sucess");</script>';
            }

            else
            {
                header("location:admin_login.php");
                echo'<script>alert("faile");</script>';

            }

    }

}


?>
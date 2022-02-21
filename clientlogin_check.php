<?php


$conn=mysqli_connect("localhost","root","","gym_management");
$msg="";
  $id=$_POST['id'];
    $name=$_POST['user_name'];
    $pass=$_POST['password'];
    if($name=='' && $pass==''){
              
           header("clientlogin.php");
    }
    else{
            
             $sql="SELECT * FROM client_details WHERE id ='$id' && user_name='$name' && password='$pass'";
             $result=mysqli_query($conn,$sql);
                    
            if(mysqli_num_rows($result))
            {     session_start();
                $_SESSION['uname']=$name;
                
                header("location:client_home.php");
                echo'<script>alert("sucess");</script>';
            }

            else
            {
                echo'<script>
                if(confirm("Incorrect Data"))
                 window.location.replace("clientlogin.php");
                else
                window.location.replace("clientlogin.php");
                </script>';
                

            }

    }



?>
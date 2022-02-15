<?php
$dbcon = mysqli_connect("localhost","root","","gym_management");
if(isset($_POST['submit'])){
    $id = $_POST['trn_id'];
    $diet_id= $_POST['diet_id'];    
    $_file=$_FILES['diet'];

    $fileName=$_FILES['diet']['name'];
    $fileTmpname=$_FILES['diet']['tmp_name'];
    $fileSize=$_FILES['diet']['size'];
    $fileError=$_FILES['diet']['error'];
    $fileType=$_FILES['diet']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed=array('jpg','jpeg','png','pdf','docx','xlsx');
    
    if (in_array($fileActualExt,$allowed)) {
           
        if ($fileError === 0) {
           
            if ($fileSize < 1000000) {

                 $fileNameNew = uniqid('',true).".".$fileActualExt;
                 $fileDestination = 'DietPlan/'.$fileNameNew;

                 $sql="INSERT INTO `diet_plan`(`trn_id`, `diet_id`, `file_name`) VALUES ('$id','$diet_id','$fileNameNew')";
                 $result = mysqli_query($dbcon,$sql);
                 echo mysqli_error($dbcon);
                 
                 move_uploaded_file($fileTmpname,$fileDestination);
                 header("Location:trainer_home.php?uploadsucsess");

            } else {
                echo "File is too big ";
            }
        } else{
            echo "There is an error occur in uploading the file !";
        }

    } else {
        echo"You cannot upload this type of file";
    }

}
?>
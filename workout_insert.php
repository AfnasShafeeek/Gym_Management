<?php
$dbcon = mysqli_connect("localhost","root","","gym_management");
if(isset($_POST['submit'])){
    $id = $_POST['trn_id'];
    $wrk_id= $_POST['wrk_id'];    
    $_file=$_FILES['workout'];

    $fileName=$_FILES['workout']['name'];
    $fileTmpname=$_FILES['workout']['tmp_name'];
    $fileSize=$_FILES['workout']['size'];
    $fileError=$_FILES['workout']['error'];
    $fileType=$_FILES['workout']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed=array('jpg','jpeg','png','pdf','docx','xlsx');
    
    if (in_array($fileActualExt,$allowed)) {
           
        if ($fileError === 0) {
           
            if ($fileSize < 1000000) {

                 $fileNameNew = uniqid('',true).".".$fileActualExt;
                 $fileDestination = 'workout/'.$fileNameNew;

                 $sql="INSERT INTO `workout_plan`(`trn_id`, `wrk_id`, `file_name`) VALUES ('$id','$wrk_id','$fileNameNew')";
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
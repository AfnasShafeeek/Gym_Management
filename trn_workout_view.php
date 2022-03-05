<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout PLAN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style='background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkz-cPZ8yef6PxLod0W8S9hWSRYeE13fdN9Q&usqp=CAU"); background-size: cover; '>
<div class="container">
<div class="Add m-4 p-4" align="right">
        <a href="workout_form.php" style="text-decoration: none;">
    <button class="btn btn-primary btn-lg">Add Workout</button>
       </a>
       <a href="trainer_home.php" style="text-decoration: none;">
    <button class="btn btn-success btn-lg">Home</button>
       </a>
</div>

 
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">PLAN ID</th>
      <th scope="col">TRAINER ID</th>
      <th scope="col">DIET PLAN</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $dbcon = mysqli_connect("localhost","root","","gym_management");
         $sql = "SELECT * FROM 	workout_plan;";
        $result=mysqli_query($dbcon,$sql);
        $resultcheck=mysqli_num_rows($result);
        while($row=mysqli_fetch_assoc($result)){
   ?>   
    <tr class="table-light">
    <td ><?php echo $row['wrk_id'];?></td>
       <td ><?php echo $row['trn_id'];?></td>      
       <td><a class="btn btn-primary" href=<?php echo "DietPlan/".$row ['file_name'];?> download>Download File</a>
       </tr>
    
   <?php } ?>
  </tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4569682fd7.js" crossorigin="anonymous"></script>
</body>
</html>
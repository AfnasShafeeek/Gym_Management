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
<body  style='background-image: url("https://wallpaperaccess.com/full/1758197.jpg"); background-size: cover; '>

<div class="container">
<div align = "center">
    <h1><b>WORKOUT PLAN</b></h1>
  </div>
<table class="table  table-bordered pt-4 mt-4">
  <thead class="thead-dark">
    <tr>
      <th scope="col">PLAN ID</th>
      <th scope="col">TRAINER ID</th>
      <th scope="col">Workout PLAN</th>
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
       <td><a class="btn btn-primary" href=<?php echo "workout/".$row ['file_name'];?> download>Download File</a>
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
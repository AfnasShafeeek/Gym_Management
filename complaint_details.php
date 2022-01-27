<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="head p-4" align="center"> 
       <h1 class="m-4 "> <b> COMPLAINTS </b> </h1>
    </div>
    <table class="table p-2 m-4 table-hover" border="2px">
        <thead class="thead-dark">
        <th class="text-center p-3">CLIENT ID</th>
        <th class="text-center p-3" style="font-weight: bold;">COMPLAINTS</th>
        </thead>
        <tbody >
        <?php
        $dbcon = mysqli_connect("localhost","root","","gym_management");
        $sql = "SELECT * FROM complaints;";
       $result=mysqli_query($dbcon,$sql);
        $resultcheck=mysqli_num_rows($result);
        while($row=mysqli_fetch_assoc($result)){
     ?>    
         <tr>
         <td><?php echo $row['id'];?></td>
         <td><?php echo $row['complaint'];?></td>
         </tr>

        </tbody>
        <?php } ?>
    </table>

</body>
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
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client details</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/details.css">
<body>

<div class="head" align="center"> 
       <h1>TRAINER DETAILS</h1>
    </div>
    
<div class="Add m-4 p-4" align="right">
        <a href="client_add.php" style="text-decoration: none;">
    <button class="btn btn-primary btn-lg">Add Member</button>
       </a>

       <a href="clint_remove.php" style="text-decoration: none;">
    <button class="btn btn-danger btn-lg">Remove Member</button>
       </a>

    </div>
    <table class="table p-2 m-4" border="1px" >
        <thead>
            <tr>
                <th class="text-center p-3">ID</th>
                <th class="text-center p-3">Name</th>
                <th class="text-center p-3">User Name</th>
                <th class="text-center p-3">Email ID</th>
                <th class="text-center p-3"> Phone Number</th>
                <th class="text-center p-3">Age</th>
                <th class="text-center p-3">Address</th>
                <th class="text-center p-3">Gender</th>
                <th class="text-center p-3">Fee</th>
                <th class="text-center p-3">Time</th>
        </thead>

        
        <tbody>
        <?php
        $dbcon = mysqli_connect("localhost","root","","gym_management");
    $sql = "SELECT * FROM client_details;";
    $result=mysqli_query($dbcon,$sql);
    $resultcheck=mysqli_num_rows($result);
        while($row=mysqli_fetch_assoc($result)){
   ?>   
   <tr>
       <td><?php echo $row['id'];?></td>
       <td><?php echo $row['name'];?></td>
       <td><?php echo $row['user_name'];?></td>
       <td><?php echo $row['mail'];?></td>
       <td><?php echo $row['phone'];?></td>
       <td><?php echo $row['age'];?></td>
       <td><?php echo $row['address'];?></td>
       <td><?php echo $row['gender'];?></td>
       <td><?php echo $row['fee'];?></td>
       <td><?php echo $row['time'];?></td>
   </tr>
    
     
   <?php } ?>
        </tbody>
   
    </table>

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
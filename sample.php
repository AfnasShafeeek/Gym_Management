
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="Add m-4 p-4" align="right">
        <a href="client_add.php" style="text-decoration: none;">
    <button class="btn btn-primary">Add Member</button>
       </a>
    </div>
    <table class="table m-3" border="1px" >
        <thead>
            <tr>
                <th>Sn</th>
                <th>Name</th>
                <th colspan="2">Email</th>
                <th rowspan="2">Phone</th>
        </thead>
        <tbody>
        <?php
        $dbcon = mysqli_connect("localhost","root","","sample1");
    $sql = "SELECT * FROM contacts;";
    $result=mysqli_query($dbcon,$sql);
    $resultcheck=mysqli_num_rows($result);
        while($row=mysqli_fetch_assoc($result)){
   ?>   
   <tr>
       <td><?php echo $row['Sn'];?></td>
       <td><?php echo $row['Name'];?></td>
       <td><?php echo $row['Email'];?></td>
       <td></td>
       <td><?php echo $row['Phone'];?></td>
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
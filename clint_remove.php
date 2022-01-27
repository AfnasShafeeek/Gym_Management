<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Trainer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
     <div class="row m-4 p-4">
     <form action="clnt_del.php" method="POST" class="form-horizontal mx-auto p-4 m-3 bg-light pt-4"  id="form">

     <div class="head m-4 pt-3">
           <h1 id="head" ><b>REMOVE CLIENT</b></h1>
      </div>

               
  <div class="form-group">
   <h4>ID</h4>
    <input type="text" class="form-control" id="id" name="id" aria-describedby="Help" placeholder="ID " value="CLT ">
    <small id="Help" class="form-text text-muted">Enter ID of Client to be remove.</small>
  </div>

  <div class="form-group">
  <h4>USER NAME</h4>
    <input type="text" class="form-control" id="u_name" name="u_name" placeholder="User Name">
  </div>

   <div class="form-group p-3" >
       <button class="btn btn-danger btn-lg">Remove</button>
    
   </div>  
</form>
     </div>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Add</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
     <div class="row">
   
     <form  action="trn_insert.php" method="POST" name="reg_form" id="reg_form" class="p-4 pt-3 mx-auto my-auto"> 
     <div class="header">
        <h1 class="title mx-auto">ADD WORKOUT</h1>
      </div>
  <div class="form-group">
    <label for="trn_id">Trainer ID :</label>
    <input type="text"class="form-control" id="trn_id" name="trn_id" placeholder="ID">
  </div>

  <div class="form-group">
    <label for="trn_id">Workout ID :</label>
    <input type="text"class="form-control" id="wrk_id" name="wrk_id" placeholder="ID">
  </div>

  <div class="form-group">
    <label for="workout">Workout :</label>
    <input type="file" class="form-control" id="workout" name="workout">
  </div>
<br>
<br>
  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
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
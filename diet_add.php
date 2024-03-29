<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet Add</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/plan.css">
</head>
<body>
    <div class="container">
     <div class="row p-4 m-4">
   
     <form  action="diet_insert.php" method="POST" name="reg_form" id="reg_form" class="form p-4 pt-4 m-4 mx-auto my-auto" enctype="multipart/form-data"> 
     <div class="header">
        <h1 class="title mx-auto m-4">ADD DIET PLAN</h1>
      </div>
  <div class="form-group p-4">
  <h5>Trainer ID :</h5>
    <input type="text" class="form-control" id="trn_id" name="trn_id" value="TRN ">
  </div>

  <div class="form-group p-4">
    <h5>Plan ID :</h5>
    <input type="text" class="form-control" id="diet_id" name="diet_id" value="DIT ">
  </div>

  <div class="form-group p-4">
    <h5>Diet Plan :</h5>
    <input type="file" class="form-control" id="diet" name="diet">
  </div>
<br>
<br>
  <button type="submit" class="btn btn-light btn-lg p-3 mt-4 mb-4" name="submit">Add Plan</button>
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
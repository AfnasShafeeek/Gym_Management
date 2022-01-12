<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Trainer Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/trainer_reg.css">
</head>
<body>
    <div class="container">

        <div align="center" class="row">
            <div class="col-lg-12">
              <div class="header">
                <h1> <b>TRAINER  REGISTRATION</b></h1>
              </div>
            </div>
        </div>
        <br>
        <br>

        <div class="row">
            <div class="col-lg-12">
             <div  class="form p-3">
                 <form action="trn_insert.php" method="POST" name="reg_form" id="reg_form" class="p-4 pt-3 pb-3">
                     <div class="form-group">

                     <label for="id" class="label mr-3"> ID :</label>
                      <input type="text" name="id" class="data" id="id" placeholder="">
                     </div>
                     <br>
                   
                     <div class="form-group">
                     <label for="name" class="label"> Name :</label>
                      <input type="text" name="name" id="name" class="data" placeholder="Full Name">
                     </div>
                     <br>

                     <div class="form-group">
                     <label for="user_name" class="label" > User Name :</label>
                      <input type="text" name="user_name" id="user_name" class="data"  placeholder="User Name">
                     
                     </div>
                     <br>

                     <div class="form-group">
                        <label for="mail" class="label" >Email address : </label>
                        <input type="email" class="data" id="mail" name="mail"  placeholder="Enter email">
                         
                    </div>

                     <div class="form-group">
                     <label for="password" class="label"> Password :</label>
                      <input type="password" name="password" id="password" class="data" placeholder="Password">
                     </div>
                     <br>

                     <div class="form-group">
                     <label for="phone" class="label"> Phone Number :</label>
                      <input type="tel" name="phone" id="phone" class="data" placeholder="Phone">
                     </div>
                     <br>

                     <div class="form-group">
                     <label for="age" class="label"> Age :</label>
                      <input type="number" name="age" id="age" class="data" placeholder="Age">
                     </div>
                     <br>

                     <div class="form-group">
                     <label for="id" class="label"> Address :</label><br>
                     <textarea name="" id="address" name="address" cols="30" rows="10" placeholder="Full address"></textarea>
                     </div>
                     <br>

                     <div class="form-group">
                     <label for="gender" class="label"> Male :</label>
                      <input type="radio" name="gender" id="gender" class="radio"  value="Male">
                      <br>
                      <label for="gender" class="label">Female :</label>
                      <input type="radio" name="gender" id="gender" class="radio" value="Female">
                     </div>
                     <br>
 
                    
                     <div class="form-group">
                     <label for="fee" class="label"> Salary :</label>
                      <input type="text" name="wage" id="wage" class="data" placeholder="">
                     </div>
                     <br>

                     
                     <div class="form-group">
                     <label for="fee" class="label"> Account Number :</label>
                      <input type="text" name="acc_num" id="acc_num" class="data" placeholder="Account Number">
                     </div>
                     <br>
                     
                     <div class="form-group">
                     <label for="time" class="label"> Time :</label> <br>
                      <select name="time" id="time">
                          <option value="morning" name="morning" id="morning">Morning</option>
                           <option value="evening" name="evening" id="evening">Evening</option>
                      </select>
                     </div>
                     <br>
                    <input type="checkbox" class="terms" name="terms" id="terms"><label for="terms">Accept all terms and conditon of the health club</label>
                    <br>
                    <br>
                    <button name="register" class="btn btn-light  btn-lg" id="button">REGISTER</button>

                 </form>
             </div>
            </div>

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
<?php  
  require('connect.php');  
  require('function.php');
  if(isset($_SESSION['user_mail'])){
  
    echo " <script> window.open('index.php?view_profile1','_self')</script>";
    }
    // elseif(!isset($_SESSION['user_email'])){
// 
    elseif(isset($_SESSION['user_email'])){
  
    echo " <script> window.open('add_student.php','_self')</script>";
    }

?>
 
<!DOCTYPE html>

<html>
<head>
       <title>Add New Student</title>
                  <!-- <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
                        <script>tinymce.init({selector:'textarea'});</script>         -->     
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
              <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   
              <style>
                /*.container{
                  margin-top:90px;
            box-shadow: inset  3px 0 10px  black,-2px 6px 1px grey ;
                }
                #heading{
                  margin-top:20px;
                  font-size: 45px;
                  color:white;
                  -webkit-text-stroke: 2px #ededeb -2px;
                  text-shadow: 0 0 10px blue,2px -6px 10px grey;
                  letter-spacing: 3px;
                }*/
              </style>

            </head>
<body bgcolor="#ededeb">

<div class="container"> 
   <!-- <div class="col-sm-14"><p id="heading" align="center"> USER FORM</p></div> -->
  <form class="form-horizontal" role="form" action="student_add.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label class="control-label col-sm-2" for="student_id">First Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="fname" required="true" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="student_id">Last Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="lname" required="true" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="student_id">Email</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" name="mail" required="true" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="student_name">Password</label>
    <div class="col-sm-8"> 
      <input type="password" class="form-control" name="ps" required="true" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="student_id">Confirm Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="cps" required="true" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Gender</label>
                   <div class="col-sm-8"> 
                                        <select name="gen" required>
                                        <option value = "" > Gender</option>
                                        <option value = "Male" > Male </option>
                                        <option value = "Female" >Female</option>
                                        <option value = "other" >Other</option>
                                        </select>
                    </div>
        </div>
 
  <div class="form-group">
    <label class="control-label col-sm-2" for="student_id">Address</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="adress" required="true" >
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2">City</label>
                   <div class="col-sm-8"> 
                                        <select name="city" required>
                                        <option value = "" > Select City</option>
                                        <option value = "Bhopal" > Bhopal </option>
                                        <option value = "Indore" >Indore</option>
                                        <option value = "Guna" >Guna</option>
                                        <option value = "Gwalior" >Gwalior</option>
                                        <option value = "Satna" >Satna</option>
                                        <option value = "Jhanshi" >Jhanshi</option>
                                        <option value = "Rewa" >Rewa</option>
                                        <option value = "Jabalpur" >	Jabalpur</option>
                                        <option value = "Chhindwara" >Chhindwara</option>
                                        <option value = "Vidisha" >	Vidisha</option>
                                        <option value = "Damon" >	Damon</option>
                                        <option value = "Itarsi" >	Itarsi</option>
                                        <option value = "Datia" >Datia	</option>
                                        <option value = "sehore" >Sehore	</option>
                                        <option value = "Bhind" >Bhind	</option>
                                        <option value = "sagar" >Sagar	</option>
                                        </select>
                    </div>
        </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2">State</label>
                   <div class="col-sm-8"> 
                                        <select name="State" required>
                                        <option value = "" > Select State</option>
                                        <option value = "MP" > Madhya pradesh </option>
                                        <option value = "UP" >Uttar pradesh</option>
                                        <option value = "Assam" >Assam</option>
                                        <option value = "Bihar" >Bihar	</option>
                                        <option value = "Goa" >	Goa</option>
                                        <option value = "Kerala" >Kerala	</option>
                                        <option value = "Maharashtra" >	Maharashtra</option>
                                        <option value = "Manipur" >Manipur	</option>
                                        <option value = "Punjab" >Punjab	</option>
                                        <option value = "Odisha" >	Odisha</option>
                                        <option value = "Rajasthan" >	Rajasthan</option>
                                        <option value = "Sikkim" >Sikkim	</option>
                                        <option value = "Uttrakhand" >Uttrakhand	</option>
                                        </select>
                    </div>
        </div>
   
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="insert_post">Add Student Now</button>
    </div><br>
    <div class="col-sm-offset-2 col-sm-10">

    <h4 >Check information</h4>

    <button type="button" onclick="check()" class="btn btn-default">check</button>
    </div>
<script>
  function check(){
    window.location.assign("st_fetch.php")
  }
  </script>

  </div>
</form>
    

    </div>  
</body>
</html>


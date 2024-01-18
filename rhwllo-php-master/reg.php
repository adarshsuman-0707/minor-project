<?php
  if(isset($_GET['msg']))
  {
    $ms=$_GET['msg'];
  }
  else
  {
    $ms="";
  }
  session_start();
  if (isset($_SESSION['login'])) {
    header("location:deskboard.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register From</title>
<link rel = "icon" href = "css/file.png" type = "image/x-icon">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
    .left{
      float: left;
    }
    .fix{
      clear: both;
    }
  </style>

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="process.php" method="get">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" name="fname" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="firstName">First name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" name="lname" class="form-control" placeholder="Last name" required="required">
                  <label for="lastName">Last name</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="mail" class="form-control" placeholder="Email address" required="required">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="ps" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" name="cps" class="form-control" placeholder="Confirm password" required="required">
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>  
            </div>
          </div>

               <div class="form-group">
                <div class="form-row">
                      <div class="col-md-2 left"> 
                     <h6 class="text-primary">Gender : </h6> 
                   </div>
                   <div class="col-md-2 left">
                       <input type="radio" name="gen" value="Male">Male
                     </div>
                     <div class="col-md-2">
                      <input type="radio" name="gen" value="Female">Female
                  </div>
                </div>
              </div>



             <div class="form-group fix">
                <div class="form-row">
                  
                    <!-- <div class="form-label-group"> -->
                      <div class="left col-md-2">
                       <h6 class="text-primary">Hobby : </h6>
                     </div>
                     <div class="left col-md-5" >
                            <div class="form-control">
                            <input type="checkbox" name="hby[]" value="Reading"> Reading
                            </div>
                             <div class="form-control">   
                            <input type="checkbox" name="hby[]" value="Dancing"> Dancing
                            </div>
                            <div class="form-control"> 
                            <input type="checkbox" name="hby[]" value="Singing"> Singing
                             </div>
                             <div class="form-control"> 
                            <input type="checkbox" name="hby[]" value="Travelling"> Travelling
                         </div>
                       </div>
                   
                 
              </div>
            </div>


             <div class="form-group fix">
                  <div class="form-label-group">
                        <textarea  rows="4"  class="form-control" name="address" placeholder="Adderess" required="required"></textarea>
                  </div>
            </div>

               <div class="form-group">
                <div class="form-row">
                      <div class="col-md-2 left"> 
                     <h6 class="text-primary">City : </h6> 
                   </div>
                   <div class="col-md-5 left">
                        <select name="city" class="form-control">
                          <option value="Ahmedabad">Ahmedabad</option>
                          <option value="Pune">Pune</option>
                          <option value="Jaipur">Jaipur</option>
                        </select>
                  </div>
                </div>
              </div>

              <div class="form-group fix">
                <div class="form-row">
                      <div class="col-md-2 left"> 
                     <h6 class="text-primary">State : </h6> 
                   </div>
                   <div class="col-md-5 left">
                        <select name="state" class="form-control">
                          <option value="Gujarat">Gujarat</option>
                          <option value="Maharastra">Maharastra</option>
                          <option value="Rajasthan">Rajasthan</option>
                        </select>
                  </div>
                </div>
              </div>
              <div class="text-danger" ><b>
                <?php
                  echo "$ms";
                ?></b>
                <br><br>
              </div>
          <input type="submit" name="reg" value="Register" class="btn btn-primary btn-block fix">

        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

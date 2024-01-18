<?php  
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location:reg.php");
    exit();
  }

  if (isset($_SESSION['fn'])) 
  {
    $fn=$_SESSION['fn'];
  }
  else
  {
    $fn="";
  }
  if (isset($_SESSION['ln'])) 
  {
    $ln=$_SESSION['ln'];
  }
  else
  {
    $ln="";
  }
  if (isset($_SESSION['us'])) 
  {
    $ml=$_SESSION['us'];
  }
  else
  {
    $ml="";
  }
  if (isset($_SESSION['ps'])) 
  {
    $pass=$_SESSION['ps'];
  }
  else
  {
    $pass="";
  }
  if (isset($_SESSION['gender'])) 
  {
    $gender=$_SESSION['gender'];
  }
  else
  {
    $gender="";
  }
  if (isset($_SESSION['add'])) 
  {
    $add=$_SESSION['add'];
  }
  else
  {
    $add="";
  }
  if (isset($_SESSION['ct'])) 
  {
    $ct=$_SESSION['ct'];
  }
  else
  {
    $ct="";
  }     
  if (isset($_SESSION['stat'])) 
  {
    $stat=$_SESSION['stat'];
  }
  else
  {
    $stat="";
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

  <title>Step 1</title>
<link rel = "icon" href = "css/file.png" type = "image/x-icon">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
    .btn1{
    

      width: 300px;
      height: 42px;
      font-size: 22px;
    }
    .left{
      float: left;
    }
    .fix{
      clear: both;
    }
  </style>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Resume Maker</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

     <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
     
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
         
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Registration</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens :</h6>
          <a class="dropdown-item" href="reg.php">Register</a>
          <a class="dropdown-item" href="login.php">Login</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Resume Builder</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
           <h6 class="dropdown-header">Steps :</h6>
           <a class="dropdown-item" href="step1.php">Step  1</a>
           <a class="dropdown-item" href="step2.php">Step  2</a>
           <a class="dropdown-item" href="step3.php">Step  3</a>
           <a class="dropdown-item" href="step4.php">Step  4</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Logout</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
           <a class="dropdown-item" href="logout.php">Logout</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Step 1</li>
        </ol>

        <!-- Page Content -->
          
          <h2 align="center">Personal Details :</h2>
            <hr>





          <form action="step1process.php" method="get">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" name="fname" class="form-control" placeholder="First name" required="required" autofocus="autofocus" value="<?php echo $fn; ?>">
                  <label for="firstName">First name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" name="lname" class="form-control" placeholder="Last name"  value="<?php echo $ln; ?>">
                  <label for="lastName">Last name</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="mail" class="form-control" placeholder="Email address" value="<?php echo $ml; ?>">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          

               <div class="form-group">
                <div class="form-row">
                      <div class="col-md-2 left"> 
                     <h6 class="text-primary">Gender : </h6> 
                   </div>
                   <div class="col-md-2 left">
                       <input type="radio" name="gen" value="Male" <?php if ($gender == "Male") echo "checked"; ?>>Male
                     </div>
                     <div class="col-md-2">
                      <input type="radio" name="gen" value="Female" <?php if ($gender == "Female") echo "checked"; ?>>Female
                  </div>
                </div>
              </div>
             <div class="form-group fix">
                  <div class="form-label-group">
                        <textarea  rows="4"  class="form-control" name="address" placeholder="Adderess"><?php echo $add; ?></textarea>
                  </div>
            </div>
               <div class="form-group">
                <div class="form-row">
                      <div class="col-md-2 left"> 
                     <h6 class="text-primary">City : </h6> 
                   </div>
                   <div class="col-md-5 left">
                        <select name="city" class="form-control">
                          <option value="Ahmedabad" <?php if ($ct=="Ahmedabad") {
                          echo "selected";
                        } ?> >Ahmedabad</option>
                          <option value="Pune" <?php if ($ct=="Pune") {
                            echo "selected";
                          } ?>>Pune</option>
                          <option value="Jaipur" <?php if ($ct=="Jaipur") {
                  echo "selected";
                } ?>>Jaipur</option>
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
                            <option value="Gujarat"  <?php if ($stat=="Gujarat") {
                            echo "selected";
                          } ?>>Gujarat</option>
                          <option value="Maharastra"  <?php if ($stat=="Maharastra") {
                          echo "selected";
                        } ?>>Maharastra</option>
                            <option value="Rajasthan"  <?php if ($stat=="Rajasthan") {
                          echo "selected";
                        } ?>>Rajasthan</option>
                                </select>
                  </div>
                </div>
              </div>
                 <div class="form-group fix">
                <div class="form-row">
                      <div class="col-md-2 left"> 
                     <h6 class="text-primary">Country : </h6> 
                   </div>
                   <div class="col-md-5 left">
                        <select name="country" class="form-control">
                          <option value="India">India</option>
                          <option value="USA">USA</option>
                          <option value="Japan">Japan</option>
                        </select>
                  </div>
                </div>
              </div>
            <input type="submit" name="reg_1" value="Next" class=" btn1 btn btn-primary btn-block ">
             <br> 
         

        </form>

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Lav Panchal 2021</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

</body>

</html>

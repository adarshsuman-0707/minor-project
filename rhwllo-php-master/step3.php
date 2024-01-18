<?php
  session_start();  
  if (!isset($_SESSION['login'])) {
    header("location:reg.php");
    exit();
  }

    //  Experience

      // 1

  if (isset($_SESSION['company1'])) 
  {
    $company1=$_SESSION['company1'];
  }
  else
  {
    $company1="";
  }
  if (isset($_SESSION['from1'])) 
  {
    $from1=$_SESSION['from1'];
  }
  else
  {
    $from1="";
  }
  if (isset($_SESSION['to1'])) 
  {
    $to1=$_SESSION['to1'];
  }
  else
  {
    $to1="";
  }

      // 2

  if (isset($_SESSION['company2'])) 
  {
    $company2=$_SESSION['company2'];
  }
  else
  {
    $company2="";
  }
  if (isset($_SESSION['from2'])) 
  {
    $from2=$_SESSION['from2'];
  }
  else
  {
    $from2="";
  }
  if (isset($_SESSION['to2'])) 
  {
    $to2=$_SESSION['to2'];
  }
  else
  {
    $to2="";
  }

    //    Reference

    //  1

  if (isset($_SESSION['name1'])) 
  {
    $name1=$_SESSION['name1'];
  }
  else
  {
    $name1="";
  }
  if (isset($_SESSION['mail1'])) 
  {
    $mail1=$_SESSION['mail1'];
  }
  else
  {
    $mail1="";
  }
  if (isset($_SESSION['desi1'])) 
  {
    $desi1=$_SESSION['desi1'];
  }
  else
  {
    $desi1="";
  }

  //  2

  if (isset($_SESSION['name2'])) 
  {
    $name2=$_SESSION['name2'];
  }
  else
  {
    $name2="";
  }
  if (isset($_SESSION['mail2'])) 
  {
    $mail2=$_SESSION['mail2'];
  }
  else
  {
    $mail2="";
  }
  if (isset($_SESSION['desi2'])) 
  {
    $desi2=$_SESSION['desi2'];
  }
  else
  {
    $desi2="";
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

  <title>Step 3</title>
<link rel = "icon" href = "css/file.png" type = "image/x-icon">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
    .main
    {
      width: 1000px;
      margin: 0px auto;
      font-size: 20px;
    }
  
    .title2{
      font-size: 30px;
    
      font-weight: bold;
    }
    .txt2{
      font-size: 20px;
      width: 320px;
    }
    .btn1{
        width: 200px;
      height: 40px;
      font-size: 22px;
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
          <li class="breadcrumb-item active">Step 3</li>
        </ol>

        <!-- Page Content -->
        
            <h2 align="center">Experience Details</h2>
                <hr><hr>
                <div>
                <form  action="step3process.php" method="get">
                  <div>
                    <div class="form-row">
                      <div class="col-md-4 text-center">
                    <lable class="title2 text-primary">Company</lable>
                  </div>
                  <div class="col-md-4 text-center">
                    <lable class="title2 text-primary">From</lable>
                  </div>
                  <div class="col-md-4 text-center">
                    <lable class="title2 text-primary">To</lable>
                  </div>
                  </div>
                  </div>
                  <br>
                  <div>
                    <div class="form-row">
                      <div class="col-md-4">
                    <input type="text" name="company1" class="txt2 form-control" placeholder="Company 1" value="<?php echo $company1;  ?>">
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="from1" class="txt2 form-control" placeholder="From 1" value="<?php echo $from1;  ?>">
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="to1" class="txt2 form-control" placeholder="To 1" value="<?php echo $to1;  ?>">
                  </div>
                  </div>
                </div>
                  <br>
                  <div>
                    <div class="form-row">
                      <div class="col-md-4">
                    <input type="text" name="company2" class="txt2 form-control" placeholder="Company 2" value="<?php echo $company2;  ?>">
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="from2" class="txt2 form-control" placeholder="From 2" value="<?php echo $from2;  ?>">
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="to2" class="txt2 form-control" placeholder="To 2" value="<?php echo $to2;  ?>">
                  </div>
                  </div>
                </div>
                  <br>
                  <hr><hr>


                  <h2 align="center">Reference Details</h2>
                  <hr><hr>
                  <div>
                    <div class="form-row">
                      <div class="col-md-4 text-center">
                    <lable class="title2 text-primary">Name</lable>
                  </div>
                  <div class="col-md-4 text-center">
                    <lable class="title2 text-primary">E-mail</lable>
                  </div>
                  <div class="col-md-4 text-center">
                    <lable class="title2 text-primary">Designation</lable>
                  </div>
                  </div>
                  </div>
                  <br>
                  <div>
                    <div class="form-row">
                     
                        <div class="col-md-4">
                        <input type="text" name="name1" class="txt2 form-control" placeholder="Name 1" value="<?php echo $name1;  ?>">
                      </div>
                      <div class="col-md-4">
                        <input type="text" name="mail1" class="txt2 form-control" placeholder="Mail 1" value="<?php echo $mail1;  ?>">
                      </div>
                      <div class="col-md-4">
                        <input type="text" name="desi1" class="txt2 form-control" placeholder="Designation 1" value="<?php echo $desi1;  ?>">
                  </div>
                 
                  </div>
                  <br>
                  <div>
                    <div class="form-row">
                      <div class="col-md-4">
                    <input type="text" name="name2" class="txt2 form-control" placeholder="Name 2" value="<?php echo $name2;  ?>">
                  </div>
                   <div class="col-md-4">
                    <input type="text" name="mail2" class="txt2 form-control" placeholder="Mail 2" value="<?php echo $mail2;  ?>">
                  </div>
                   <div class="col-md-4">
                    <input type="text" name="desi2" class="txt2 form-control" placeholder="Designation 2" value="<?php echo $desi2;  ?>">
                  </div>
                  </div>
                  </div>
                  <br>
                  <div class="col-md-12" align="center">
                    <input type="submit" name="reg_3" value="Next" class="btn1 btn btn-primary">
                  </div>
                  </div>
                </form>
              </div>
               <br>
                 <div class="col-md-12" align="center">
                 <a href="step2.php"> <button class="btn1 btn btn-primary">Back</button> </a>
               </div>
               <br>

      </div>
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

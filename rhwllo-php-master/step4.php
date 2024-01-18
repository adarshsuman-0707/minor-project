<?php  
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location:reg.php");
    exit();
  }

    // step : 1

  if (isset($_SESSION['fn'])) {
    $fn=$_SESSION['fn'];
  }
  else
  {
    $fn="";
  }
  if (isset($_SESSION['ln'])) {
    $ln=$_SESSION['ln'];
  }
  else
  {
    $ln="";
  }
  if (isset($_SESSION['us'])) {
    $ml=$_SESSION['us'];
  }
  else
  {
    $ml="";
  }
  if (isset($_SESSION['ps'])) {
    $ps=$_SESSION['ps'];
  }
  else
  {
    $ps="";
  }
  if (isset($_SESSION['gender'])) {
    $gender=$_SESSION['gender'];
  }
  else
  {
    $gender="";
  }
  if (isset($_SESSION['add'])) {
    $add=$_SESSION['add'];
  }
  else
  {
    $add="";
  }
  if (isset($_SESSION['ct'])) {
    $ct=$_SESSION['ct'];
  }
  else
  {
    $ct="";
  }
  if (isset($_SESSION['stat'])) {
    $stat=$_SESSION['stat'];
  }
  else
  {
    $stat="";
  }
  if (isset($_SESSION['country'])) {
    $con=$_SESSION['country'];
  }
  else
  {
    $con="";
  }

    //  step : 2

      // Education

      //  1

  if (isset($_SESSION['course1'])) 
  {
    $course1=$_SESSION['course1'];
  }
  else
  {
    $course1="";
  }
  if (isset($_SESSION['course2'])) 
  {
    $course2=$_SESSION['course2'];
  }
  else
  {
    $course2="";
  }
  if (isset($_SESSION['course3'])) 
  {
    $course3=$_SESSION['course3'];
  }
  else
  {
    $course3="";
  }
  if (isset($_SESSION['course4'])) 
  {
    $course4=$_SESSION['course4'];
  }
  else
  {
    $course4="";
  }


      //  2

  if (isset($_SESSION['year1'])) 
  {
    $year1=$_SESSION['year1'];
  }
  else
  {
    $year1="";
  }
  if (isset($_SESSION['year2'])) 
  {
    $year2=$_SESSION['year2'];
  }
  else
  {
    $year2="";
  }
  if (isset($_SESSION['year3'])) 
  {
    $year3=$_SESSION['year3'];
  }
  else
  {
    $year3="";
  }
  if (isset($_SESSION['year4'])) 
  {
    $year4=$_SESSION['year4'];
  }
  else
  {
    $year4="";
  }

      //  3

  if (isset($_SESSION['board1'])) 
  {
    $board1=$_SESSION['board1'];
  }
  else
  {
    $board1="";
  }
  if (isset($_SESSION['board2'])) 
  {
    $board2=$_SESSION['board2'];
  }
  else
  {
    $board2="";
  }
  if (isset($_SESSION['board3'])) 
  {
    $board3=$_SESSION['board3'];
  }
  else
  {
    $board3="";
  }
  if (isset($_SESSION['board4'])) 
  {
    $board4=$_SESSION['board4'];
  }
  else
  {
    $board4="";
  }

      //  4


  if (isset($_SESSION['result1'])) 
  {
    $result1=$_SESSION['result1'];
  }
  else
  {
    $result1="";
  }
  if (isset($_SESSION['result2'])) 
  {
    $result2=$_SESSION['result2'];
  }
  else
  {
    $result2="";
  }
  if (isset($_SESSION['result3'])) 
  {
    $result3=$_SESSION['result3'];
  }
  else
  {
    $result3="";
  }
  if (isset($_SESSION['result4'])) 
  {
    $result4=$_SESSION['result4'];
  }
  else
  {
    $result4="";
  }


          // Achievement

    // 1

  if (isset($_SESSION['title1'])) 
  {
    $title1=$_SESSION['title1'];
  }
  else
  {
    $title1="";
  }
  if (isset($_SESSION['ayear1'])) 
  {
    $ayear1=$_SESSION['ayear1'];
  }
  else
  {
    $ayear1="";
  }
  if (isset($_SESSION['des1'])) 
  {
    $des1=$_SESSION['des1'];
  }
  else
  {
    $des1="";
  }

      //  2

  if (isset($_SESSION['title2'])) 
  {
    $title2=$_SESSION['title2'];
  }
  else
  {
    $title2="";
  }
  if (isset($_SESSION['ayear2'])) 
  {
    $ayear2=$_SESSION['ayear2'];
  }
  else
  {
    $ayear2="";
  }
  if (isset($_SESSION['des2'])) 
  {
    $des2=$_SESSION['des2'];
  }
  else
  {
    $des2="";
  }

  //  step : 3
    
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

  <title>Step 4</title>
<link rel = "icon" href = "css/file.png" type = "image/x-icon">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
    <style type="text/css">
    .main{
      width: 1000px;
      margin: 0px auto;
      text-align: center;
      font-size: 25px;
    }
    table{
      width: 1000px;
      height: auto;
    }
    td{
      height: 30px;
    }
    table,td,th{
      border:1px solid black;
      border-collapse: collapse;
      font-size: 25px;
      text-align: center;
    }
    .left{
      float: left;
    }
    .right{
      float: right;
    }
    .fix{
      clear: both;
    }
    .btn1{
      width: 200px;
      height: 40px;
      font-size: 22px;
    }

    .title{
      text-align: center;
      font-size: 45px;
    }
    .title2{
      font-weight: bold;
      font-size: 30px;
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
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
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

      <div class="container">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Step 4</li>
        </ol>

        <!-- Page Content -->
          
          <u><h1 class="title">Resume</h1></u>
          <div class="col-md-3 text-center float-right">
                  <a href="pdf.php" target="_blank"><button class="btn1 btn btn-primary">Download PDF</button></a>
                </div>
                <ul type="disk">
                  <li><div class="title2 left text-primary">Personal Details :</div></li>
                </ul>
                 <div class="col-sm-12 table-responsive fix">
                <table align="center" class="table table-bordered table-striped">
                  <tr>
                    <th>First Name :</th>
                    <td><?php echo "$fn";  ?></td>  
                  </tr>
                  <tr>
                    <th>Last Name :</th>
                    <td><?php echo "$ln";  ?></td>  
                  </tr>
                  <tr>
                    <th>E-Mail :</th>
                    <td><?php echo "$ml";  ?></td>  
                  </tr>
                  <tr>
                    <th>Gender :</th>
                    <td><?php echo "$gender";  ?></td>  
                  </tr>
                  <tr>
                    <th>Address :</th>
                    <td><?php echo "$add";  ?></td> 
                  </tr>
                  <tr>
                    <th>City :</th>
                    <td><?php echo "$ct";  ?></td>  
                  </tr>
                  <tr>
                    <th>State :</th>
                    <td><?php echo "$stat" ;  ?></td>  
                  </tr>    
                  <tr>
                    <th>Country :</th>
                    <td><?php echo "$con" ;  ?></td> 
                  </tr>
                </table>
              </div>
                <br>
                <ul type="disk">
                  <li><div class="title2 left text-primary">Education Details :</div></li>
                </ul>
                 <div class="table-responsive fix">
                <table align="center" class="table table-bordered table-striped">
                  <tr>
                    <th>Course</th>
                    <th>Year</th>
                    <th>Board</th>
                    <th>Result</th>
                  </tr>
                  <?php 
                    if ($course1!="") {
                   ?>
                   <tr>
                    <td><?php echo "$course1";  ?></td>
                    <td><?php echo "$year1";  ?></td>
                    <td><?php echo "$board1";  ?></td>
                    <td><?php echo "$result1";  ?></td>   
                  </tr>
                  <?php 
                    }
                  ?>
                  <?php 
                    if ($course2!="") {
                   ?>
                   <tr>
                    <td><?php echo "$course2";  ?></td>
                    <td><?php echo "$year2";  ?></td>
                    <td><?php echo "$board2";  ?></td>
                    <td><?php echo "$result2";  ?></td>   
                  </tr>
                  <?php 
                    }
                  ?>
                  
                   <?php 
                    if ($course3!="") {
                   ?>
                   <tr>
                    <td><?php echo "$course3";  ?></td>
                    <td><?php echo "$year3";  ?></td>
                    <td><?php echo "$board3";  ?></td>
                    <td><?php echo "$result3";  ?></td>   
                  </tr>
                  <?php 
                    }
                  ?>
                   <?php 
                    if ($course4!="") {
                   ?>
                   <tr>
                    <td><?php echo "$course4";  ?></td>
                    <td><?php echo "$year4";  ?></td>
                    <td><?php echo "$board4";  ?></td>
                    <td><?php echo "$result4";  ?></td>   
                  </tr>
                  <?php 
                    }
                  ?>
                </table>
              </div>
                <br>
                <ul type="disk">
                  <li><div class="title2 left text-primary">Achievement Details :</div></li>
                </ul>
                 <div class="table-responsive">
                <table align="center" class="fix table table-bordered table-striped">
                  <tr>
                    <th>Title</th>
                    <th>Year</th>
                    <th>Description</th>
                  </tr>
                  <?php 
                  if ($title1!="") {
                   ?>
                   <tr>
                    <td><?php echo "$title1";  ?></td>
                    <td><?php echo "$ayear1";  ?></td>
                    <td><?php echo "$des1";  ?></td>
                  </tr>
                   <?php  
                  }
                  ?>
                  <?php 
                  if ($title2!="") {
                   ?>
                   <tr>
                    <td><?php echo "$title2";  ?></td>
                    <td><?php echo "$ayear2";  ?></td>
                    <td><?php echo "$des2";  ?></td>
                  </tr>
                   <?php  
                  }
                  ?>
                </table>
              </div>
                <br>
                <ul type="disk">
                  <li><div class="title2 left text-primary">Experience Details :</div></li>
                </ul>
                 <div class="fix">
                <table align="center" class="table table-bordered table-striped">
                  <tr>
                    <th>Company</th>
                    <th>From</th>
                    <th>To</th>
                  </tr>
                  <?php if ($company1!="") { ?>
                    <tr>
                    <td><?php echo "$company1";  ?></td>
                    <td><?php echo "$from1";  ?></td>
                    <td><?php echo "$to1";  ?></td>
                  </tr>
                  <?php } ?>
                 
                  <?php if ($company2!="") { ?>
                    <tr>
                    <td><?php echo "$company2";  ?></td>
                    <td><?php echo "$from2";  ?></td>
                    <td><?php echo "$to2";  ?></td>
                  </tr>
                  <?php } ?>
                </table>
              </div>
                <br>
                <ul type="disk">
                  <li><div class="title2 left">Reference  Details :</div></li>
                </ul>
                <div class="fix table-responsive">
                <table class="table table-bordered table-striped">
               
                  <tr>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Designation</th>
                  </tr>
              
                  <?php if ($name1!="") { ?>
                    <tr>
                    <td><?php echo "$name1";  ?></td>
                    <td><?php echo "$mail1";  ?></td>
                    <td><?php echo "$desi1";  ?></td>
                  </tr>
                  <?php } ?>
                 
                   <?php if ($name2!="") { ?>
                    <tr>
                    <td><?php echo "$name2";  ?></td>
                    <td><?php echo "$mail2";  ?></td>
                    <td><?php echo "$desi2";  ?></td>
                  </tr>
                  <?php } ?>
              
                </table>
              </div>
              <br>
                <div class="form-row">
                  <div class="col-md-3 text-center">
                  <a href="step1.php"><button class="btn1 btn btn-primary">STEP 1</button></a>
                </div>
                <br><br>
                  <div class="col-md-3 text-center">
                  <a href="step2.php"><button class="btn1 btn btn-primary">STEP 2</button></a>
                </div>
                <br><br>
                  <div class="col-md-3 text-center">
                  <a href="step3.php"><button class="btn1 btn btn-primary">STEP 3</button></a>
                </div>
                <br><br>
                  <div class="col-md-3 text-center">
                  <a href="pdf.php" target="_blank"><button class="btn1 btn btn-primary">Download PDF</button></a>
                </div>

                </div>
            

      </div>
     <br>
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

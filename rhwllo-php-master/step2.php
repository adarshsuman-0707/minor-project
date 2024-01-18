<?php  
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location:reg.php");
    exit();
  }
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


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Step 2</title>
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
    .title1{
      font-size: 30px;
      font-weight: bold;
    }
    .txt1{
      font-size: 20px;
     
    }
    .title2{
      font-size: 30px;
     
      font-weight: bold;
    }
    .txt2{
      font-size: 20px;
     
    }
    .btn1{
       
      width: 200px;
      height: 40px;
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
          <li class="breadcrumb-item active">Step 2</li>
        </ol>

        <!-- Page Content -->
        
             <h2 align="center">Education Details</h2>
                <hr><hr>
                <form  action="step2process.php" method="get">
                  <div>
                    <div class="form-row">
                      <div class="col-md-3 text-center">
                     <lable class="title1 text-primary">Course</lable>
                      </div>
                      <div class="col-md-3 text-center">
                      <lable class="title1 text-primary">Year</lable>
                    </div>
                    <div class="col-md-3 text-center">
                      <lable class="title1 text-primary">Board</lable>
                    </div>
                    <div class="col-md-3 text-center">
                      <lable class="title1 text-primary">Grade</lable>
                    </div>
                  </div>
                </div>
                  <br>
                  <div>
                      <div class="form-row">
                      <div class="col-md-3"> 
                     <input type="text" name="course1" placeholder="Course 1" class="txt1 form-control" value="<?php echo $course1; ?>">
                     </div>
                     <div class="col-md-3">
                    <input type="text" name="year1" placeholder="Year 1" class="txt1 form-control" value="<?php   echo $year1; ?>">
                     </div>
                       <div class="col-md-3">
                    <input type="text" name="board1" placeholder="Board 1" class="txt1 form-control" value="<?php echo $board1;  ?>">
                     </div>
                     <div class="col-md-3">
                    <input type="text" name="result1" placeholder="Result 1" class="txt1 form-control" value="<?php echo $result1; ?>">
                     </div>
                   </div>
                  </div>
                  <br>
                  <div>
                     <div class="form-row">
                      <div class="col-md-3"> 
                    <input type="text" name="course2" class="txt1 form-control" placeholder="Course 2" value="<?php echo $course2; ?>">
                      </div>
                      <div class="col-md-3"> 
                    <input type="text" name="year2" class="txt1 form-control" placeholder="Year 2" value="<?php echo $year2; ?>">
                      </div>
                      <div class="col-md-3"> 
                    <input type="text" name="board2" class="txt1 form-control" placeholder="Board 2" value="<?php echo $board2;  ?>">
                       </div>
                      <div class="col-md-3"> 
                    <input type="text" name="result2" class="txt1 form-control" placeholder="Result 2" value="<?php echo "$result2"; ?>">
                  </div>
                  </div>
                </div>
                  <br>
                  <div>
                     <div class="form-row">
                      <div class="col-md-3"> 
                      <input type="text" name="course3" class="txt1 form-control" placeholder="Course 3" value="<?php echo $course3; ?>">
                      </div>
                       <div class="col-md-3"> 
                       <input type="text" name="year3" class="txt1 form-control" placeholder="Year 3" value="<?php echo $year3; ?>">
                     </div>
                     <div class="col-md-3"> 
                    <input type="text" name="board3" class="txt1 form-control" placeholder="Board 3" value="<?php echo $board3;  ?>">
                     </div>
                      <div class="col-md-3"> 
                    <input type="text" name="result3" class="txt1 form-control" placeholder="Result 3" value="<?php echo "$result3"; ?>">
                    </div>
                  </div>
                </div>
                  <br>
                  <div>
                    <div class="form-row">
                      <div class="col-md-3"> 
                    <input type="text" name="course4" class="txt1 form-control" placeholder="Course 4" value="<?php echo $course4; ?>">
                  </div>
                  <div class="col-md-3">
                    <input type="text" name="year4" class="txt1 form-control" placeholder="Year 4" value="<?php echo $year4; ?>">
                  </div>
                  <div class="col-md-3">
                    <input type="text" name="board4" class="txt1 form-control" placeholder="Board 4" value="<?php echo $board4;  ?>">
                  </div>
                  <div class="col-md-3">
                    <input type="text" name="result4" class="txt1 form-control" placeholder="Result 4" value="<?php echo "$result4"; ?>">
                  </div>
                  </div>
                  </div>
                  <br>
                  <hr><hr>
                  <h2 align="center">Achievement Details</h2>
                  <hr><hr>
                  <div>
                    <div class="form-row">
                    <div class="col-md-4 text-center">
                    <lable class="title2 text-primary">Title</lable>
                    </div>
                    <div class="col-md-4 text-center">
                    <lable class="title2 text-primary">Year</lable>
                  </div>
                  <div class="col-md-4 text-center">
                    <lable class="title2 text-primary">Description</lable>
                  </div>
                  </div>
                </div>
                  <br>
                  <div>
                    <div class="form-row">
                      <div class="col-md-4"> 
                    <input type="text" name="title1" class="txt2 form-control" placeholder="Title 1" value="<?php echo $title1; ?>">
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="ayear1" class="txt2 form-control" placeholder="Year 1" value="<?php echo$ayear1 ?>">
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="des1" class="txt2 form-control" placeholder="Description 1" value="<?php echo $des1; ?>">
                  </div>
                  </div>
                </div>
                  <br>
                  <div>
                    <div class="form-row">
                      <div class="col-md-4">
                    <input type="text" name="title2" class="txt2 form-control" placeholder="Title 2" value="<?php echo $title2; ?>">
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="ayear2" class="txt2 form-control" placeholder="Year 2" value="<?php echo$ayear2 ?>">
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="des2" class="txt2 form-control" placeholder="Descriptin 2" value="<?php echo $des2; ?>">
                  </div>
                  </div>
                </div>
                <br>
                
                <div class="col-md-12" align="center" >
                    <input type="submit" name="reg_2" value="Next" class="btn1 btn btn-primary">
                </div>


                </form>
               <br>
                 <div class="col-md-12" align="center">
                <a href="step1.php"> <button class="btn1 btn btn-primary ">Back</button> </a>
                </div>
              </div>
             </div>
            
                

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <br>
      <footer class="sticky-footer">
        <div class="container my-auto fix">
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

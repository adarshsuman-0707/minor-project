<?php  
  if(isset($_GET['msg']))
  {
    $ms=$_GET['msg'];
  }
  else
  {
    $ms=""; 
  }
  if (isset($_COOKIE['username'])) {
    $u=($_COOKIE['username']);
  }
  else
  {
    $u="";
  }
  if (isset($_COOKIE['password'])) {
    $p=($_COOKIE['password']);
  }
  else
  {
    $p="";
  }
  session_start();
  if (isset($_SESSION['login'])) {
    header("location:deskboard.php");
    exit();
  }
  if (!isset($_SESSION['us']) && !isset($_SESSION['ps'])) {
    header("location:reg.php");
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

  <title>Login</title>
<link rel = "icon" href = "css/file.png" type = "image/x-icon">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="checklogin.php" method="get">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="user" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" value="<?php echo $u;  ?>">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required="required" value="<?php echo $p;  ?>">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember" value="1">
                Remember Password
              </label>
            </div>
          </div>
          <br>
            <?php echo "$ms"; ?>
            <br>
          <input type="submit" class="btn btn-primary btn-block" name="log" class="btn1" value="LOGIN">
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

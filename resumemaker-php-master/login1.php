<?php session_start(); ?>
<?php
//$role = $_SESSION['user_role'] ;

if(isset($_SESSION['mail'])){
	
	echo " <script> window.open('index.php?view_profile','_self')</script>";
}
elseif (isset($_SESSION['mail'])) {
	echo " <script> window.open('index.php?view_profile1','_self')</script>";
}

else{
	include('connect.php');

	if (isset($_GET['fname'])) {
		$get_user = $_GET['fname'];
	
	}

 		//echo $get_user;
?>

<!DOCTYPE html>

<head>
 
  <title>Login Profile</title>
  <link rel="stylesheet" href="styles/login_style.css" media="all">
  <script src="js/login_script.js"> </script>
  
</head>

<body>

<span href="#" class="button" id="toggle-login">Log in</span>

<div id="login">
  <div id="triangle"></div>
  <!-- <h2 style="color:#FFF; text-align:center;"><?php echo @$_GET['not_admin']; ?> </h2>
  <h2 style="color:#FFF; text-align:center;"><?php echo @$_GET['logged_out']; ?> </h2> -->
  <h1> Login</h1>
  <form method="post" action=" ">
    <input type="email" placeholder="Email" name="mail" />
    <input type="password" placeholder="Password" name="ps" />
    <input type="submit" value="Log in" name="login" /> 
  </form>
</div>

</body>
</html>

<?php
  
 include('connect.php');
 
     if(isset($_POST['login'])){
		
		$email = mysqli_real_escape_string($con, $_POST['mail']);
		 $pass = mysqli_real_escape_string($con, $_POST['ps']);
		 
	 
			$sel_user = "SELECT * FROM student WHERE mail = '$email' AND ps ='$pass'";
		 $run_user = mysqli_query($con, $sel_user);
		 
		 $check_user = mysqli_num_rows($run_user);
		 
		 if($check_user ==0){
			 
			 echo "<script> alert('Password or Email is wrong, try again!')</script>";
			 
			 
			}
			else{
				$_SESSION['user_email'] = $email;
				
				//echo "<script> window.open('index.php?logged_in= You have successfully logged in','_parent')</script>";
                echo '<META  HTTP-EQUIV="Refresh" Content = "0.000001 ; URL = index.php?view_profile1">';
				//echo "<script> window.open('index.php','_parent')</script>";
			}
			
	 }

}
?>
		 
		 

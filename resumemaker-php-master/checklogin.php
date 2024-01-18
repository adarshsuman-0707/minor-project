<?php 
	session_start();
	$u1=$_SESSION['us'];
	$p1=$_SESSION['ps'];
	if(!isset($_GET['log']))
	{
		header("location:reg.php");
		exit();	
	};
	if (isset($_SESSION['login'])) {
		header("location:deskboard.php");
		exit();
	}
	$u2=$_GET['user'];
	$p2=$_GET['pass'];
	if ($u1==$u2) 
	{
		if ($p1==$p2) 
		{
			session_start();
			$_SESSION['login']="1";
				if (isset($_GET['remember'])) 
					{
						$user=$_SESSION['us'];
						$pass=$_SESSION['ps'];
						setcookie("username",$user,time()+(86400 * 30),"/");
						setcookie("password",$pass,time()+(86400 * 30),"/");
					}
			header("location:deskboard.php");
			exit();
		}	
		else
		{
			header("location:login.php?msg= Username or Password is Wrong...!");
			exit();	
		}
	}
	else
	{
		header("location:login.php?msg= Username or Password is Wrong...!");
		exit();
	}
?>
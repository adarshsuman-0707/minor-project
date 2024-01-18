<?php  
	if (!isset($_GET['reg_1'])) 
	{
		header("location:step1.php");
		exit();
	}


	
	session_start();
	if (isset($_GET['fname'])) 
	{
		$_SESSION['fn']=$_GET['fname'];
	}
	else
	{
		$_SESSION['fn']="";
	}
	if (isset($_GET['lname'])) 
	{
		$_SESSION['ln']=$_GET['lname'];
	}
	else
	{
		$_SESSION['ln']="";
	}
	if (isset($_GET['mail'])) 
	{
		$_SESSION['us']=$_GET['mail'];
	}
	else
	{
		$_SESSION['us']="";
	}
	if (isset($_GET['ps'])) 
	{
		$_SESSION['ps']=$_GET['ps'];
	}
	else
	{
		$_SESSION['ps']="";
	}
	if (isset($_GET['gen'])) 
	{
		$_SESSION['gender']=$_GET['gen'];
	}
	else
	{
		$_SESSION['gender']="";
	}
	if (isset($_GET['address'])) 
	{
		$_SESSION['add']=$_GET['address'];
	}
	else
	{
		$_SESSION['add']="";
	}
	if (isset($_GET['city'])) 
	{
		$_SESSION['ct']=$_GET['city'];
	}
	else
	{
		$_SESSION['ct']="";
	}			
	if (isset($_GET['state'])) 
	{
		$_SESSION['stat']=$_GET['state'];
	}
	else
	{
		$_SESSION['stat']="";
	}	
	if (isset($_GET['country'])) 
	{
		$_SESSION['country']=$_GET['country'];	}
	else
	{
		$_SESSION['country']="";
	}	
		header("location:step2.php");
		exit();
?>
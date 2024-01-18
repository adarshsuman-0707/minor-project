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
	if (isset($_SESSION['login'])) 
	{
		header("location:deskboard.php");
		exit();
	}
	if(!isset($_GET['reg']))
	{
			header("location:reg.php");
			exit();	
	}
		if(isset($_GET['fname']))
		{
			$fn=$_GET["fname"];
			if ($fn=="") {
				header("location:reg.php?msg= Please Enter First Name...");
				exit();
			}
		}
		else
		{
			header("location:reg.php?msg= Please Enter First Name...");
			exit();	
		}
		if(isset($_GET['lname']))
		{
			$ln=$_GET["lname"];
			if ($ln=="") {
				header("location:reg.php?msg= Please Enter First Name...");
				exit();
			}
		}
		else
		{
			header("location:reg.php?msg= Please Enter Last Name...");
			exit();	
		}

		if(isset($_GET['mail']))
		{
			$ml=$_GET["mail"];
		}
		else
		{
			header("location:reg.php?msg= Please Enter E-mail...");
			exit();	
		}
		if(isset($_GET['ps']))
		{
			$pass=$_GET["ps"];
			if ($pass=="") {
				header("location:reg.php?msg= Please Password...");
				exit();	
			}
		}
		else
		{
			header("location:reg.php?msg= Please Password...");
			exit();	
		}
		if(isset($_GET['cps']))
		{
			$cpass=$_GET["cps"];
			if ($cpass=="") {
				header("location:reg.php?msg= Please Password...");
				exit();	
			}
		}
		else
		{
			header("location:reg.php?msg= Please Confirm Password...");
			exit();	
		}
		if ($pass!=$cpass) 
		{
			header("location:reg.php?msg= Password and Confirm password are not Same...");
			exit();	
		}
		if(isset($_GET['gen']))
		{
			$gender=$_GET['gen'];
		}
		else
		{
			header("location:reg.php?msg= Please Select Gender...");
			exit();	
		}
		if(isset($_GET['hby']))
		{
			$hb=$_GET['hby'];
		}
		else
		{
			header("location:reg.php?msg= Please Select Hobby...");
			exit();	
		}
		if($_GET['address'] == "")
		{
			header("location:reg.php?msg= Please Enter Address...");
			exit();
		}
		else
		{
				$add=$_GET["address"];
		}
		
		$c=$_GET["city"];
		$st=$_GET["state"];

		if ($c=="Ahmedabad") 
		{
			if ($st=="Gujarat") 
			{
				$ct=$_GET["city"];
				$stat=$_GET["state"];

			}
			else
			{
				header("location:reg.php?msg= Please Select Valid State Or City...");
				exit();
			}
		}
		if ($c=="Pune") 
		{
			if ($st=="Maharastra") 
			{
				$ct=$_GET["city"];
				$stat=$_GET["state"];

			}
			else
			{
				header("location:reg.php?msg= Please Select Valid State Or City...");
				exit();
			}
		}
		if ($c=="Jaipur") 
		{
			if ($st=="Rajasthan") 
			{
				$ct=$_GET["city"];
				$stat=$_GET["state"];

			}
			else
			{
				header("location:reg.php?msg= Please Select Valid Stat Or City...");
				exit();
			}
		}
		session_start();
		$_SESSION['us']=$ml;
		$_SESSION['ps']=$pass;
		$_SESSION['cps']=$cpass;
		$_SESSION['fn']=$fn;
		$_SESSION['ln']=$ln;
		$_SESSION['gender']=$gender;
		$_SESSION['hby']=$hb;
		$_SESSION['add']=$add;
		$_SESSION['ct']=$ct;
		$_SESSION['stat']=$stat;
		header("location:login.php");
		exit();
?>


<?php  
	session_start();
	if (!isset($_GET['reg_3'])) 
	{
		header("location:step3.php");
		exit();
	}

			//  Experience

			// 1

	if (isset($_GET['company1'])) 
	{
		$_SESSION['company1']=$_GET['company1'];
	}
	else
	{
		$_SESSION['company1']="";
	}
	if (isset($_GET['from1'])) 
	{
		$_SESSION['from1']=$_GET['from1'];
	}
	else
	{
		$_SESSION['from1']="";
	}
	if (isset($_GET['to1'])) 
	{
		$_SESSION['to1']=$_GET['to1'];
	}
	else
	{
		$_SESSION['to1']="";
	}

			// 2

	if (isset($_GET['company2'])) 
	{
		$_SESSION['company2']=$_GET['company2'];
	}
	else
	{
		$_SESSION['company2']="";
	}
	if (isset($_GET['from2'])) 
	{
		$_SESSION['from2']=$_GET['from2'];
	}
	else
	{
		$_SESSION['from2']="";
	}
	if (isset($_GET['to2'])) 
	{
		$_SESSION['to2']=$_GET['to2'];
	}
	else
	{
		$_SESSION['to2']="";
	}

		//    Reference

		//  1

	if (isset($_GET['name1'])) 
	{
		$_SESSION['name1']=$_GET['name1'];
	}
	else
	{
		$_SESSION['name1']="";
	}
	if (isset($_GET['mail1'])) 
	{
		$_SESSION['mail1']=$_GET['mail1'];
	}
	else
	{
		$_SESSION['mail1']="";
	}
	if (isset($_GET['desi1'])) 
	{
		$_SESSION['desi1']=$_GET['desi1'];
	}
	else
	{
		$_SESSION['desi1']="";
	}

	//  2

	if (isset($_GET['name2'])) 
	{
		$_SESSION['name2']=$_GET['name2'];
	}
	else
	{
		$_SESSION['name2']="";
	}
	if (isset($_GET['mail2'])) 
	{
		$_SESSION['mail2']=$_GET['mail2'];
	}
	else
	{
		$_SESSION['mail2']="";
	}
	if (isset($_GET['desi2'])) 
	{
		$_SESSION['desi2']=$_GET['desi2'];
	}
	else
	{
		$_SESSION['desi2']="";
	}


	header("location:step4.php");
	exit();

?>
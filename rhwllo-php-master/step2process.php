<?php  
	session_start();
	if (!isset($_GET['reg_2']))
	{
		header("location:step2.php");
		exit();
	}

			// Education

			//  1

	if (isset($_GET['course1'])) 
	{
		$_SESSION['course1']=$_GET['course1'];
	}
	else
	{
		$_SESSION['course1']="";
	}
	if (isset($_GET['course2'])) 
	{
		$_SESSION['course2']=$_GET['course2'];
	}
	else
	{
		$_SESSION['course2']="";
	}
	if (isset($_GET['course3'])) 
	{
		$_SESSION['course3']=$_GET['course3'];
	}
	else
	{
		$_SESSION['course3']="";
	}
	if (isset($_GET['course4'])) 
	{
		$_SESSION['course4']=$_GET['course4'];
	}
	else
	{
		$_SESSION['course4']="";
	}


			//  2

	if (isset($_GET['year1'])) 
	{
		$_SESSION['year1']=$_GET['year1'];
	}
	else
	{
		$_SESSION['year1']="";
	}
	if (isset($_GET['year2'])) 
	{
		$_SESSION['year2']=$_GET['year2'];
	}
	else
	{
		$_SESSION['year2']="";
	}
	if (isset($_GET['year3'])) 
	{
		$_SESSION['year3']=$_GET['year3'];
	}
	else
	{
		$_SESSION['year3']="";
	}
	if (isset($_GET['year4'])) 
	{
		$_SESSION['year4']=$_GET['year4'];
	}
	else
	{
		$_SESSION['year4']="";
	}

			//  3

	if (isset($_GET['board1'])) 
	{
		$_SESSION['board1']=$_GET['board1'];
	}
	else
	{
		$_SESSION['board1']="";
	}
	if (isset($_GET['board2'])) 
	{
		$_SESSION['board2']=$_GET['board2'];
	}
	else
	{
		$_SESSION['board2']="";
	}
	if (isset($_GET['board3'])) 
	{
		$_SESSION['board3']=$_GET['board3'];
	}
	else
	{
		$_SESSION['board3']="";
	}
	if (isset($_GET['board4'])) 
	{
		$_SESSION['board4']=$_GET['board4'];
	}
	else
	{
		$_SESSION['board4']="";
	}

			//  4


	if (isset($_GET['result1'])) 
	{
		$_SESSION['result1']=$_GET['result1'];
	}
	else
	{
		$_SESSION['result1']="";
	}
	if (isset($_GET['result2'])) 
	{
		$_SESSION['result2']=$_GET['result2'];
	}
	else
	{
		$_SESSION['result2']="";
	}
	if (isset($_GET['result3'])) 
	{
		$_SESSION['result3']=$_GET['result3'];
	}
	else
	{
		$_SESSION['result3']="";
	}
	if (isset($_GET['result4'])) 
	{
		$_SESSION['result4']=$_GET['result4'];
	}
	else
	{
		$_SESSION['result4']="";
	}


					// Achievement

		// 1

	if (isset($_GET['title1'])) 
	{
		$_SESSION['title1']=$_GET['title1'];
	}
	else
	{
		$_SESSION['title1']="";
	}
	if (isset($_GET['ayear1'])) 
	{
		$_SESSION['ayear1']=$_GET['ayear1'];
	}
	else
	{
		$_SESSION['ayear1']="";
	}
	if (isset($_GET['des1'])) 
	{
		$_SESSION['des1']=$_GET['des1'];
	}
	else
	{
		$_SESSION['des1']="";
	}

			//  2

	if (isset($_GET['title2'])) 
	{
		$_SESSION['title2']=$_GET['title2'];
	}
	else
	{
		$_SESSION['title2']="";
	}
	if (isset($_GET['ayear2'])) 
	{
		$_SESSION['ayear2']=$_GET['ayear2'];
	}
	else
	{
		$_SESSION['ayear2']="";
	}
	if (isset($_GET['des2'])) 
	{
		$_SESSION['des2']=$_GET['des2'];
	}
	else
	{
		$_SESSION['des2']="";
	}

		header("location:step3.php");
		exit();


?>
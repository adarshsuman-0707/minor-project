


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

  // PDF Cde

	require("fpdf/fpdf.php");
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->SetFont("Arial","",28);
	$pdf->SetTextColor(0,80,180);
     $pdf->SetDrawColor(0,80,180);

	$pdf->Cell(0,10,"Resume",0,1,'C');
	$pdf->Ln(3);

	$pdf->SetFont("Arial","",22);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(0,10,"Personal Details",1,1,'C',true);
	$pdf->SetFont("Arial","",14);
	$pdf->SetTextColor(1,1,1);
	$pdf->Cell(50,10,"First Name",1);
	$pdf->Cell(0,10,$fn,1,1);

	$pdf->Cell(50,10,"Last Name",1);
	$pdf->Cell(0,10,$ln,1,1);

	$pdf->Cell(50,10,"Email",1);
	$pdf->Cell(0,10,$ml,1,1);

	$pdf->Cell(50,10,"Gender",1);
	$pdf->Cell(0,10,$gender,1,1);

	$pdf->Cell(50,10,"Address",1);
	$pdf->Cell(0,10,$add,1,1);

	$pdf->Cell(50,10,"City",1);
	$pdf->Cell(0,10,$ct,1,1);

	$pdf->Cell(50,10,"State",1);
	$pdf->Cell(0,10,$stat,1,1);

	$pdf->Cell(50,10,"Country",1);
	$pdf->Cell(0,10,$con,1,1);

	$pdf->Ln(3);
	$pdf->SetFont("Arial","",22);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(0,10,"Education Details",1,1,'C',true);
	$pdf->SetFont("Arial","",14);
	$pdf->SetTextColor(1,1,1);
	$pdf->Cell(47.5,10,"Course",1);
	$pdf->Cell(47.5,10,"Year",1);
	$pdf->Cell(47.5,10,"Board",1);
	$pdf->Cell(47.5,10,"Result",1,1);


	if ($course1!="") {
		$pdf->Cell(47.5,10,$course1,1);
		$pdf->Cell(47.5,10,$year1,1);
		$pdf->Cell(47.5,10,$board1,1);
		$pdf->Cell(47.5,10,$result1,1,1);	
	}
	if ($course2!="") {
		$pdf->Cell(47.5,10,$course2,1);
		$pdf->Cell(47.5,10,$year2,1);
		$pdf->Cell(47.5,10,$board2,1);
		$pdf->Cell(47.5,10,$result2,1,1);	
	}
	if ($course3!="") {
		$pdf->Cell(47.5,10,$course3,1);
		$pdf->Cell(47.5,10,$year3,1);
		$pdf->Cell(47.5,10,$board3,1);
		$pdf->Cell(47.5,10,$result3,1,1);	
	}
	if ($course4!="") {
		$pdf->Cell(47.5,10,$course4,1);
		$pdf->Cell(47.5,10,$year4,1);
		$pdf->Cell(47.5,10,$board4,1);
		$pdf->Cell(47.5,10,$result4,1,1);	
	}
	
	$pdf->Ln(3);
	$pdf->SetFont("Arial","",22);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(0,10,"Achievement Details",1,1,'C',true);
	$pdf->SetFont("Arial","",14);
	$pdf->SetTextColor(1,1,1);
	$pdf->Cell(63.33,10,"Title",1);
	$pdf->Cell(63.33,10,"Year",1);
	$pdf->Cell(63.33,10,"Description",1,1);

	if ($title1!="") {
		$pdf->Cell(63.33,10, $title1,1);
		$pdf->Cell(63.33,10,$ayear1,1);
		$pdf->Cell(63.33,10, $des1,1,1);
	}
	if ($title2!="") {
		$pdf->Cell(63.33,10, $title2,1);
		$pdf->Cell(63.33,10,$ayear2,1);
		$pdf->Cell(63.33,10, $des2,1,1);
	}

	$pdf->Ln(3);
	$pdf->SetFont("Arial","",22);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(0,10,"Experience  Details",1,1,'C',true);
	$pdf->SetFont("Arial","",14);
	$pdf->SetTextColor(1,1,1);
	$pdf->Cell(63.33,10,"Company",1);
	$pdf->Cell(63.33,10,"From",1);
	$pdf->Cell(63.33,10,"To",1,1);

	if ($company1!="") {
		$pdf->Cell(63.33,10, $company1,1);
		$pdf->Cell(63.33,10,$from1,1);
		$pdf->Cell(63.33,10,$to1,1,1);
	}
	if ($company2!="") {
		$pdf->Cell(63.33,10, $company2,1);
		$pdf->Cell(63.33,10,$from2,1);
		$pdf->Cell(63.33,10,$to2,1,1);
	}

	$pdf->Ln(3);
	$pdf->SetFont("Arial","",22);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(0,10,"Reference   Details",1,1,'C',true);
	$pdf->SetFont("Arial","",14);
	$pdf->SetTextColor(1,1,1);	
	$pdf->Cell(63.33,10,"Name",1);
	$pdf->Cell(63.33,10,"Email",1);
	$pdf->Cell(63.33,10,"Designation",1,1);

	if ($name1!="") {
		$pdf->Cell(63.33,10,$name1,1);
		$pdf->Cell(63.33,10,$mail1,1);
		$pdf->Cell(63.33,10, $desi1,1,1);
	}

	if ($name2!="") {
		$pdf->Cell(63.33,10,$name2,1);
		$pdf->Cell(63.33,10,$mail2,1);
		$pdf->Cell(63.33,10, $desi2,1,1);
	}





	$pdf->output()	
 ?>
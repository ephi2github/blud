

<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

    <div id="banner"> <img  height="638" width="1000"src="logo1.jpg"></div>
                                                            <div id="header" ><?php include("amanagerpage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">
																									<?php
																									session_start();

                   // <form  name="form" method="post" action="">
                    
                    
                    
                  //  <div style="background-color: #999999">
                          
                                // <fieldset style="width:50%" style="border-color:#008000">
//music
// <legend><b>database</b></legend><br />
//<?php	       
			$title=$_POST['title'];
			$body=$_POST['body'];
			$author=$_POST['author'];	
			$byear=$_POST['byear'];
			$bmonth=$_POST['bmonth'];
			$bday=$_POST['bday'];
			$file=$_POST['file'];	
			include('Db_Cconnection.php');			
			$save="INSERT INTO addnews(Title,Body,Author,Posted_date,Picture) VALUES ('$title','$body','$author','$byear.$bmonth.$bday','$file')";							
			 $result=mysqli_query($con,$save);
			 if(!$result)
			 { 
			 die( mysqli_error($con));
			}
			else {
			
			echo " you have sucsfully added";
			}						
			exit();	
							
	
?>	
	
?>
    
</fieldset>
<table>
<tr><td><a href="file:///D|/IT 4th/idustrial pro/final industrial project  slide presentation/midprogress/dani4/cancelreservation.php">Cancel Reservation</a></td></tr>
</table>
</fieldset>
<fieldset class="loginField">
<table>
<tr><td><a href="file:///D|/IT 4th/idustrial pro/final industrial project  slide presentation/midprogress/dani4/updatereservation.php">Update Reservation</a></td></tr>
</table>
<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
</div>
</body>





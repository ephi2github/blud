

<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

    <div id="banner"> <img  height="638" width="1000"src="logo1.jpg"></div>
                                                            <div id="header" ><?php include("openpage.php");?></div>
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
	       
			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			$lname=$_POST['lname'];			
			$sex=$_POST['sex'];
			$age=$_POST['age'];
			$wt=$_POST['wt'];
			$phonenumber=$_POST['phonenumber'];			
			include('Db_Cconnection.php');
			
			$save="INSERT INTO dnreq(Firstname,Middlename,Lastname,Sex,Age,Weight,Phone) VALUES ('$fname','$mname','$lname','$sex','$age','$wt','$phonenumber')";
			
			
			
			
			 $result= mysqli_query($con,$save);
			 if(!$result)
			 { 
			 die( mysqli_error($con));
			
			//header("location: upload_vacancy.php");
			}
			else {		
	echo " you have successfully sent request, Your appointment Id is="; 	
$select="select Reg_no from dnreq where  Age='$age'";
$result= mysqli_query($con,$select);
if(!$result) die ( mysqli_error($con));
while($row=mysqli_fetch_array($result)) {
echo "$row[Reg_no]";
echo ", dont forget it!!";
}
			}			
			exit();	
							
	
?>
    
</fieldset>
<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
</div>
</body>





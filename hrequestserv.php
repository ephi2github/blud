

<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

    <div id="banner"> <img  height="638" width="1000"src="logo1.jpg"></div>
                                                            <div id="header" ><?php include("Hospitalpage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">

                  <?php 
						session_start();
						include_once('Db_Cconnection.php');
						

			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			$lname=$_POST['lname'];		
			$sex=$_POST['sex'];
			$age=$_POST['age'];
			$hname=$_POST['hname'];			
			$tel=$_POST['tel'];
			$email=$_POST['email'];			
			$bgrp=$_POST['bgrp'];
            $aneed=$_POST['aneed'];			
			include('Db_Cconnection.php');
			$select="select * from abld where  blood_group='$bgrp'";
$result= mysqli_query($con,$select);
if(!$result) die ( mysqli_error($con));
$row=mysqli_fetch_array($result);
$blood=$row['blood_group'];
if($bgrp!=$blood){
echo"Blood is not available";}
else {
			$save="INSERT INTO hreq(fname,mname,lname,sex,age,Hospitalname,phone_no,email,blood_group,amount_needed) VALUES ('$fname','$mname','$lname','$sex','$age','$hname','$tel','$email','$bgrp','$aneed')";	
			 $result= mysqli_query($con,$save);
			 if(!$result)
			 { 
			 die( mysqli_error($con));
			}
			else {
			
			echo " you have successfully sent";
			}	}
			
			exit();	
							
	
?>
    
</fieldset>
</fieldset>
<fieldset class="loginField">
<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
</div>
</body>





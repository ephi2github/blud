

<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

    <div id="banner"> <img  height="638" width="1000"src="logo1.jpg"></div>
                                                            <div id="header" ><?php include("InventoryPage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">
																									<?php 
						session_start();
						include_once('Db_Cconnection.php');
						$bgrp=$_POST["bgrp"];
						 mysqli_select_db($con,"brc");
					 $sql = "SELECT * from abld where blood_group ='$bgrp'";
						$check = mysqli_query($sql,$con);					
						if(mysqli_num_rows($check)!=1){
						header("Location: distribute.php?fail");
							//session_destroy();
						}
						else {

						while($row = mysqli_fetch_array($check))
											  {
 	  
								$previlage=$row['blood_group'];
													  
							
								$_SESSION['blood_group']=$bgrp;
								//echo  $_SESSION['user_name'];
								//$_SESSION['E_fname']=$user_name;
														
								if($previlage=='$bgrp'){
														
								header("Location: distributeserv.php");
														break;
														}					
														
											}
						}
						 mysqli_close();
            
			$pname=$_POST['pname'];					
			$sex=$_POST['sex'];
			$bgrp=$_POST['bgrp'];
			$rbgrp=$_POST['rbgrp'];
			$aneed=$_POST['aneed'];
			$date=date("Y-m-d h:i:sa");
			include('Db_Cconnection.php');
$sql1 = "SELECT `amount` FROM `abld` WHERE `blood_group`='$bgrp'";
			$result1=mysqli_query($sql1) or die("query error". mysqli_error($con)); 
			while($row1=mysqli_fetch_array($result1)){
			$amount=$row1['amount'];
            $check1=$amount-$aneed;
}
			include('Db_Cconnection.php');
			if($bgrp!==$rbgrp){
			echo"Required blood must be the same with patient blood group ";
			}
			else if($check1<0)
{
echo "Your requested amount is not avaliable";
}		
			else {
			$save="INSERT INTO bldis(patient_name,sex,P_bloodgroup,R_bloodgroup,amount,date) VALUES ('$pname','$sex','$bgrp','$rbgrp','$aneed','$date')";
			 $result= mysqli_query($con,$save);
			 if(!$result)
			 { 
			 die( mysqli_error($con));
			}
			
else if ($check1>=0){
			include('Db_Cconnection.php');
$sql2 = "UPDATE `abld` SET `amount`='$check1' WHERE blood_group='$bgrp';";
$res=mysqli_query($sql2) or die("query error". mysqli_error($con));

			echo "successfully Distributed";
		}
			}
			exit();	
							
	
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





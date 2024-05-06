


<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

    <div id="banner"> <img  height="638" width="1000"src="logo1.jpg"></div>
                                                            <div id="header" ><?php include("Inventorypage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">
																									<?php
																									session_start();
             $id=$_POST['paw'];
            $pno=$_POST['pno'];
			$bgrp=$_POST['bgrp'];						
			$byear=$_POST['byear'];									
			$ebyear=$_POST['ebyear'];	
if(isset($_POST['update']))	{	
include('Db_Cconnection.php');
$sql="update abld set Reg_id='$id',pack_number='$pno',blood_group='$bgrp',collected_date='$byear',expired_date='$ebyear' where Reg_id ='$id';";
   $res= mysqli_query($con,$sql) or die("query error". mysqli_error($con));
   echo"you have update successfully";
}
   else
{
include('Db_Cconnection.php');
$sql="delete from abld
 where Reg_id ='$id';";
$res= mysqli_query($con,$sql) or die("query error". mysqli_error($con));
echo "successfully deleted";
}
mysqli_close($con);
?>
</div></div>
<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
</div>
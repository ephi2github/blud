


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
             $id=$_POST['paw'];
            $uname=$_POST['uname'];
			$pass=$_POST['pass'];						
			$role=$_POST['role'];									
			
if(isset($_POST['update']))	{	
include('Db_Cconnection.php');
$sql="update account set Reg_id='$id',Username='$uname',Password='$pass',Role='$role' where Reg_id ='$id';";
   $res=mysqli_query(  $con,$sql) or die("query error". mysqli_error($con));
   echo"you have update successfully";
}
   else
{
include('Db_Cconnection.php');
$sql="delete from account
 where Reg_id ='$id';";
$res=mysqli_query($con,$sql) or die("query error". mysqli_error($con));
echo "successfully deleted";
}
mysqli_close($con);
?>
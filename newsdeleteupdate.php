


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
            $title=$_POST['title'];
			$body=$_POST['body'];
			$author=$_POST['author'];
			$byear=$_POST['byear'];									
			$picture=$_POST['picture'];	
if(isset($_POST['update']))	{	
include('Db_Cconnection.php');
$sql="update addnews set Rec_id='$id',Title='$title',Body='$body',Author='$author',Posted_date='$byear',Picture='$picture' where Rec_id ='$id';";
   $res= mysqli_query($con,$sql) or die("query error". mysqli_error($con));
   echo"you have update successfully";
}
   else
{
include('Db_Cconnection.php');
$sql="delete from addnews
 where Rec_id ='$id';";
$res= mysqli_query($con,$sql) or die("query error". mysqli_error($con));
echo "successfully deleted";
}
mysqli_close($con);
?>
</div></div>
<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
</div>
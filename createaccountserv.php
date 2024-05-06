

<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

    <div id="banner"> <img  height="638" width="1000"src="logo1.jpg"></div>
                                                            <div id="header" ><?php include("amanagerPage.php");?></div>
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
			$uname=$_POST['uname'];
			$pass=$_POST['pass'];
			$role=$_POST['role'];			
			include('Db_Cconnection.php');
			
			$save="INSERT INTO account(Username,Password,Role) VALUES ('$uname','$pass','$role')";
			
			
			
			
			 $result= mysqli_query($con,$save);
			 if(!$result)
			 { 
			 echo"User name is already exist";
			
			//header("location: upload_vacancy.php");
			}
			else {
			echo " you have successfully created"; 			
			}
			exit();									
?>
    
</fieldset>

</fieldset>
<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
</div>
</body>





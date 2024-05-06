<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
  <style type="text/css">
<!--
.style1 {font-size: large}
-->
  </style>
</head>
<body>
<div id="all">

    <div id="banner"> <img  height="638" width="1000"src="logo1.jpg"></div>
                                                            <div id="header" ><?php include("amanagerpage.php");?></div>
															
                                                             <span class="loginVerticalPanel style1">
																									 <div id="main_container">
																									 <div id="left_content">
																								    <?php
																									session_start();
//<?php
$id=$_POST['select'];
$con=mysqli_connect("localhost","root","");
if(!$con){
	die("unable to connect :". mysqli_error($con));
}
 mysqli_select_db($con,"brc");
$sql="select * from employee where Empolyy_Id='$id';";
$res= mysqli_query($con,$sql) or die("query error". mysqli_error($con));
while($row=mysqli_fetch_array($res)){
?>
                                                             <span>
<table border=1 bgcolor=red>
<form action="employeeupdate.php" method="post" class="style1">


<label><em><strong><font face="Arial, Helvetica, sans-serif">The Information  About The Employee is</font></strong></em> </label>

<span class="loginVerticalPanel">
<table cellspaccolspan="2"><?php if(isset($_GET['delete'])) echo "<font color=\"red\"><center> error</center></font>";?></td></tr>

<input type="hidden" name="paw" value="<?php echo $row['Empolyy_Id'];?>" /><br>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First Name:&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="firstname" value="<?php echo $row['E_fname'];  ?>"/><br>
<br/>

&nbsp;&nbsp;&nbsp;&nbsp;Middle Name:&nbsp;
<input type="text" name="mname" value="<?php echo $row['mname'];  ?>"/><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Last Name :&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="lname" value="<?php echo $row['lname'];  ?>"/><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Sex:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="sex" value="<?php echo $row['sex'];?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="age" value="<?php echo $row['Age'];  ?>"/><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Country :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="country" value="<?php echo $row['country'];  ?>"/><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;City :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="city" value="<?php echo $row['city'];  ?>"/><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Telephone:&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="tel" value="<?php echo $row['mobile'];  ?>"/><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="email" value="<?php echo $row['email'];?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Salary :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="sal" value="<?php echo $row['salary'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Department :&nbsp;&nbsp;
<input type="text" name="dpt" value="<?php echo $row['responsiblity'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;specialization:&nbsp;
<input type="text" name="specfic" value="<?php echo $row['specialization'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;marital status:&nbsp;
<input type="text" name="marridge" value="<?php echo $row['status'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="update" value="Update" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="delete" value="delete" />
</span>



</fieldset >	
</form>
</table>
                                                             <span class="loginVerticalPanel style1">
                                                             <?php
}
?>
                                                             </span><span class="loginVerticalPanel">
                                                             </span>
															 </div></div>
<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div></div>

															 </body>
</html>

 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><body bgcolor="" >
      <script type="text/javascript">
      <!--
	  var image1=new Image()
      image1.src="logo1.jpg"
      var image2=new Image()
      image2.src="logo6.jpg"
      var image3=new Image()
      image3.src="logo7.jpg"      
      </script>
</head>
<title>aprove</title>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<fiedset>
<div id="all">
     <img src="chh.JPG" name="slide" width="1002" height="638" />
	  <script>
      <!--
      //variable that will increment through the images
      var step=1
      function slideit(){
      //if browser does not support the image object, exit.
      if (!document.images)
      return
      document.images.slide.src=eval("image"+step+".src")
      if (step<6)
      step++
      else
      step=1
      //call function "slideit()" every 2.5 seconds
      setTimeout("slideit()",3000)
      }
      slideit()
      //-->
      </script>
    <div id="header">
	<?php include('inventorypage.php');?>
	</div>
	<div id="main_container">
	 
		
		<form action="delethreq.php" method="POST"><input type="hidden" name="id" value="<?php echo $row[0]; ?>"> 
		  <?php
$id=$_POST['id'];
$con = mysqli_connect("localhost","root","");
if (!$con){
  die('Could not connect: ' .  mysqli_error($con));
}
 mysqli_select_db($con,"brc");
$result = mysqli_query($con,"SELECT * FROM hreq WHERE Reg_no='$id'");
$row = mysqli_fetch_array($result);
?>
<div class="wrapper">
<div> 	     
<form name="f" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<h3 align="center"> delete form</h3>
<table width="500"  cellspacing="3" cellpadding="6" class="loginVerticalPanel" align="center">
<input type="hidden" name="paw" value="<?php echo $row['Reg_no'];?>" /><br>
<br/>
<tr>
  <td align="right">First name</td>
<td><input type="text"name="fname" value="<?php echo $row[1];?>" readonly bgcolor="yellow"></td>
</tr>
<tr>
  <td align="right">Middle name</td>
<td><input type="text"name="lname" value="<?php echo $row[2];?>"></td>
</tr>
<tr>
  <td align="right">Last name</td>
<td><input type="text"name="mname" value="<?php echo $row[3];?>"></td>
</tr>
<tr>
 <td align="right"> Sex</td>
<td><input type="text"name="sex" value="<?php echo $row[4];?>"></td>
</tr>
<tr>
 <td align="right"> Age</td>
<td><input type="text"name="age" value="<?php echo $row[5];?>"></td>
</tr>
<tr>
 <td align="right"> Hospital name</td>
<td><input type="text" name="hname" value="<?php echo $row[6];?>"></td>
</tr>
<tr>
 <td align="right"> Phone</td>
<td><input type="text"name="tel" value="<?php echo $row[7];?>"></td>
</tr>
<tr>
 <td align="right"> Email</td>
<td><input type="text"name="email" value="<?php echo $row[8];?>"></td>
</tr>
<tr>
 <td align="right"> Requiredblood</td>
<td><input type="text" name="bgrp" value="<?php echo $row[9];?>"></td>
</tr>
<tr>
 <td align="right">Amount</td>
<td><input type="text" name="aneed" value="<?php echo $row[10];?>"></td>
</tr>
     <tr align="center"/>
<td colspan="3"/>
 <input type="submit" name="select"value="delete"onclick="return as();">

</td>
</tr>
</table>
 </form>
</div>
		   <?php
	     
		if(isset($_POST['select'])){
		include('Db_Cconnection.php');				
		$id=$_POST['paw'];
		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lname=$_POST['lname'];		
		$sex=$_POST['sex'];
		$age=$_POST['age'];
		$hname=$_POST['hname'];
		$tel=$_POST['tel'];
        $bgrp=$_POST['bgrp'];
        $aneed=$_POST['aneed'];	
				//$photo=$_POST['img'];												
		$target_path="C:/wamp/www/uploads/" ;
		//$target_path=$target_path.basename($_FILES['file']['name']);
		//if(move_uploaded_file($_FILES['file']['tmp_name'],$target_path))
			{   		
		$sql="delete from hreq where Reg_no='$id';";
		$result= mysqli_query($con,$sql);
		if(!$result)
		die("unable to insert values". mysqli_error($con));
		echo "<h2 align=center>Successfully deleted!!</h2>";
		}	
		  }
?>    
	 </div></div>
															 <div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div></div> 
</body>
</html>

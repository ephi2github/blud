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
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
  <style type="text/css">
<!--
.style1 {
	font-size: x-large;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style3 {color: #400040}
-->
  </style>
</head>
<body>
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
                                                            <div id="header" ><?php include("InventoryPage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">
																									<?php
																									session_start();
																								
																									

//$id=$_POST['select'];
$con=mysqli_connect("localhost","root","");
if(!$con){
	die("unable to connect :". mysqli_error($con));
}
 mysqli_select_db($con,"brc");
$sql="select Reg_Id from abld";
$res= mysqli_query($con,$sql) or die("query error". mysqli_error($con));

?>
<form action="bloodupdate.php" method="post">
	
  <p>
  
  <tr><td bordercolor="#993366" bgcolor="#9900CC"><label>&nbsp;&nbsp;&nbsp;&nbsp;<span class="style1"> <span class="style3"> Search blood </span>&nbsp;&nbsp; </span><br>
        <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
  &nbsp;&nbsp; &nbsp;<span class="style1">&nbsp;<span class="style3"> Reg.Id</span></span></label>
      <span class="style1">
      <select name="select">
          <?php
while($row=mysqli_fetch_array($res)){

echo "<option value=".$row['Reg_Id'].">".$row['Reg_Id']."</option>";
}
?>
          </select>
      </span>
  
 <p>
  
    <input name="Submit" type="submit" align ="center" class="style1" value="search">
  </p>
  
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;  </p>
  </fieldset>
</form>
</div></div>
<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
</div>
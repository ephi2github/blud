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
  <script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
  </script>
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
                                                            <div id="header" ><?php include("nursepage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">
																									<?php
																									//session_start();
																																																	

//$id=$_POST['select'];
$con=mysqli_connect("localhost","root","root");
if(!$con){
	die("unable to connect :". mysqli_error($con));
}
 mysqli_select_db($con,"brc");
$sql="select Client_Id from client_appointment ";
$res= mysqli_query($con,$sql) or die("query error". mysqli_error($con));

?>
<form action="appointmentupdate.php" method="post">
	
  <p>
  
  <tr><td bordercolor="#993366" bgcolor="#9900CC"><label>&nbsp;&nbsp;&nbsp;&nbsp;<span class="style1"> <span class="style3"> view donor appointment information </span></span><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
  &nbsp;&nbsp; &nbsp;<span class="style1">&nbsp;Client Id </span></label>
      <label>
      <input name="luname" type="text" onBlur="MM_validateForm('uname','','R');return document.MM_returnValue">
      </label>
      <p align="left">
        <label class="style3">
        <input name="Submit" type="submit" class="style1" value="view">
        </label>
      </p>
  
  <p>&nbsp;</p>
  <p align="right">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;  </p>

</form>
</div></div>
<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
</div>
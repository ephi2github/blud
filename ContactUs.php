 
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
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">
      <img src="chh.JPG" name="slide" width="1000" height="638" />


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
	<?php include('openpage.php');?>
	</div>

	<div id="main_container">
		<div><?php echo "</b><a href=\"home.php\"><font color='green'>Home</a></font> <b>:</b><font color='blue'>Contact us</font>"?></div><div  style="margin-top:2cm;"id="left_content">
	    
	 <img height="218" width="596"src="ph.jpg"/></div>
	   <div   style="margin-top:1.0cm;" id="left_content">
	   	<fields class="loginFiel">
	 <table>
	  <tr><td><b><h2>Contact Us</h2></b></td></tr>
	  <tr><td>Tel: </td><td> +251913663095</td></tr>
	  <tr><td>Mob: </td><td> +251920135021</td></tr>
	  <tr><td>Fax: </td><td> +251582221280</td></tr>
	    <tr><td><b><h2>Location</h2></b></td></tr>
		 <tr><td><b><h2>Kebele 16 Inside Gondar University Hospital</h2></b></td></tr>
	 </table>
	  	 </fieldset>
   	  </div>
		<table >
	   <tr>
  <td align='center' colspan="2"><p><a href="http://facebook.com/"><b></a></p>
    <p>&nbsp;</p>
    <p><a href="http://facebook.com/"><img src="eduf.jpg" width="139" height="136" title="Facebook"><a href="https://accounts.google.com/"><b><img src="edug.jpg" width="152" height="306"title="Gmail"></b></a></p>
	   </div></td></tr>    </table >
	  
	</div>
		<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
	
</div>
</body>
</html>  
 
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
<title>Mission</title>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
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
    <div id="header">
	<?php include('openpage.php');?>
	</div>
	
	       <div id="main_container">
<div><?php echo "</b><a href=\"home.php\"><font color='green'>Home</a></font> <b>:</b><font color='red'>Mission</font>"?></div>
				<div id="left_content" style="border: none;">
					
								   <table >
										 <tr><td><font color="red"><b>Mission</b></font></td></tr>
										 <tr><td>Our mission is to serve our community by meeting the needs of patients, hospitals, and members for safe, high quality blood products and related services.  </td></tr>
										 <tr><td>and public health services including research activities according the  </td></tr> 
										 <tr><td> organizational values and principles.</td></tr>
					</table>
				  
					 
								 <table>
										   <tr><td> <font color="red"><b>vision</b></font></td></tr>
											  <tr><td>Gondar Blood Bank is committed to accomplishing its mission and meeting the challenges of the future by: </td></tr>
											  <tr><td> <ul>
                        <li>	
	Anticipating and responding to customer needs.
</li>
                        <li>	Seeking opportunities for continuous improvement.</li>
                        <li>	Building trust between the organization, its membership, and the community.. </li>                       
                        <li>Providing education which enhances the understanding of transfusion medicine and the need for blood Enhancing the quality, efficiency, and effectiveness of the organization through teamwork. </li>
                 
                        </ul></td></tr>
											
								 </table>
			      
	     	 </div>
		
	    <div id="right_content" Style="border:none">
	      <fieldset class="loginField"> 
		 <a href=""> <center><b>INERNAL LINKS</b></center></a>
	      </fieldset>
	       <fieldset class="loginField"> 
		 <a href="hoviewblood.php"> <center> available blood</center></a>
		   </fieldset>
		      <fieldset class="loginField"> 
		  <a href="appoint.php"><center>make apointment</center></a>
		   </fieldset>		       		     
	   	 </div>   
          </div>
		<div id="footer" ><center>
		  <font color="white">Copyright &copy; 2016 Gondar Blood Bank </font>
		</center></div>
	
</div>
</body>
</html>
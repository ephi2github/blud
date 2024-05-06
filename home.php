<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
<title>home</title>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
<style type="text/css">
<!--
.style59 {color: #000066}
.style60 {font-size: 36px}
.style61 {font-style: italic; font-size: 14px;}
-->
</style>
</head>
<body>
<div>
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
    <div class="style59"    id="header">  <?php include('openpage.php');?>	</div> 		   
	
	              
				   <span class="style59">
	
	               </span>
      <div class="style59" id="main_container">
        <div><?php echo "</b>"."<font color='green'>MAIN PAGE</font>"?></div>
	   <div class="style60" id="left_content" style="margin-top:0cm;">
	    
	   <table width="559">
	   	   <tr><td width="517"><h2>
	   	   WELCOME TO GONDAR BLOOD BANK 
	   	   </h2><td width="28">
	   	   </tr>
	    </table>
        
			  
			  	<table>
	                <tr><td width="527" align="justify"><span class="style60">Give blood save life </span></td>
	                </tr>
					 <tr><td align="justify"><img src="1.jpg" alt="" width="578" height="27" /><br />
					  Blood  is universally recognized as the most precious element that sustains life. It  saves innumerable lives across the world in a variety of conditions. The need  for blood is great - on any given day, approximately 39,000 units of Red Blood  Cells are needed. More than 29 million units of blood components are transfused  every year.
					   Despite  the increase in the number of donors, blood remains in short supply during  emergencies, mainly attributed to the lack of information and accessibility.
					   </tr>
				</table>
         
			    
			    <table >
	                
	                <td width="165"><img src="3.JPG" width="579" height="228"></tr>
					
			    </table>
   
					
			      
				  <table>
				<tr><td align='center' colspan="2">if u want to contact us <a href="contactus.php"><b> Click Here</b></a></td></tr>
				    </table>
	            
					
			      <table>
		            
					  <tr><td>24 hour available  <td></tr>
	        </table>
	   
	<?php //include('slideshow.php');?>
   	  </div>
		 
	   <div id="right_content" Style="border:none">
	       <div> 
	   <table>

							<?php
									$t=time();
									//echo($t . "<br />");
									echo(date("D F d Y",$t));
								?>
	    </table>
		     </div>
	         
			   <div>
 	             <?php include('login1.php');?>
         </div>
	
		  <div>
		  <script type="text/javascript" src="calendar.js"></script>
<!-- import the language module -->
<script type="text/javascript" src="calendar-en.js"></script>
 	             <?php include('anounce4.php');?>
         </div>
		 	 
   	  </div>
	  <div>	  </div>
	</div>
		<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
</div>
</div>
</body>
</html>
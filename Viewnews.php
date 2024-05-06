

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
	  <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
</style>
</head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
  <style type="text/css">
<!--
.style3 {color: #99CC99}
-->
  </style>
</head>
 <body bgcolor="#99CCCC">
  <span class="style3"></span>
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
      <div id="header" ><?php include("openpage.php");?></div>

	    <div id="main_container">
		<div><?php echo "</b><a href=\"home.php\"><font color='green'>Home</a></font> <b>:</b><font color='blue'>,
	available news</font>"?></div>
                 <div  id="center_content">



<TABLE>
<th width="49%" height="48" scope="column"><p>
<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
die("unable to connect");
 mysqli_select_db($con,"brc");
$b=mysqli_query('select Title,Body,Author,Posted_date,Picture from addnews');
//$b2=mysqli_fetch_array($b);
echo"<font color='blue'>VISIT NEW INFORMATION HERE !!</font>";
echo"&nbsp &nbsp";
echo"<br>";
echo"<br>";
echo"<table border='0'>";
echo"<tr> <td>Title</td><td>Body</td><td>Author</td><td>Posted_date</td><td>Picture</td> </tr>";
echo "<tr>";
while($row = mysqli_fetch_array($b))
{
echo"<td>";
echo $row['Title'];
echo"</td>";
echo"&nbsp &nbsp";
echo"<td>";
echo $row['Body'];echo"</td>";
echo"&nbsp &nbsp";
echo"<td>";
echo $row['Author'];
echo"</td>";
echo"<td>";
echo $row['Posted_date'];
echo"</td>";
echo"&nbsp &nbsp";
?>
 <td>
 <img src ="<?php echo $row['Picture']?>"width ="200px" height="150px" align="left" title="image"/>
</td>
</tr>
<?php
}
echo"</table>";
?>
</table>
</div>
 </div>
	<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
 </div>
</body>



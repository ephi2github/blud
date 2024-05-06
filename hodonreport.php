<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><body bgcolor="" >
  <script type="text/javascript">
    </script>
</head>
<style type="text/css">
  input{
    width:200px;
    height:30px;
  }
</style>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
<title>report</title>
</head>
<body>  
<div id="all">
  <img src="chh.JPG" name="slide" width="1002" height="638" />


  <script>
    </script>
  <div id="header">
    
      <?php include('openpage.php');?>
  </div>
  <div id="main_container">
      <div style=" margin-left:170px ;"id="left_content">
        
          
          <?php
require('fpdf.php');
include("connection.php"); // Assuming this file contains the database connection code

//most of the entries here are self explanatory, PHP advance scripting knowledge preferred. If any doubts please let us know through your comments in http://mistonline.in/wp/export-mysqli-database-table-to-pdf-using-php-2/
$d=date('d_m_Y');
class PDF extends FPDF
{

// ... other functions ...

//LoadData function with `$this->` usage corrected
function LoadData($file)
{
  //Read file lines
  $lines = file($file);
  $data = array();

  foreach($lines as $line) {
    $data[] = explode(';', chop($line)); // Use $this-> only for accessing class properties
  }
  return $data;
}

// ... other functions ...

} // End of PDF class

$pdf = new PDF();
// ... rest of the code ...

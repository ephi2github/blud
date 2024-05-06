
<?php
$con1 = mysqli_connect("localhost","root","");
if (!$con1)
  {
  die('Could not connect: ' .  mysqli_error($con));
  }
  mysqli_select_db($con1,"bank");
  ?>
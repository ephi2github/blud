<?php
 $id=$_POST['paw'];			
include('Db_Cconnection.php');
$sql="delete from abld
 where Reg_id ='$id';";
$res= mysqli_query($con,$sql) or die("query error". mysqli_error($con));
echo "successfully deleted";
mysqli_close($con);
?>
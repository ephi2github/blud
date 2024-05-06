<?php 
						session_start();
						include_once('Db_Cconnection.php');
						$bgrp=$_POST["bgrp"];
						 mysqli_select_db($con,"brc");
					 $sql = "SELECT * from abld where blood_group ='$bgrp'";
						$check = mysqli_query($sql,$con);
						if(mysqli_num_rows($check)!=1){
						header("Location: hrequest.php?fail");
							//session_destroy();
						}
						else {

						while($row = mysqli_fetch_array($check))
											  {
											  
								$previlage=$row['blood_group'];
													  
							
								$_SESSION['blood_group']=$bgrp;
								//echo  $_SESSION['user_name'];
								//$_SESSION['E_fname']=$user_name;
														
								if($previlage=='$bgrp'){
														
								header("Location: hrequestserv.php");
														break;
														}														
														
											}
						}
						 mysqli_close();

?>
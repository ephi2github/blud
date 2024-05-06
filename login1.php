<html>
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
 	  	 <form method="post" action="LoginServer.php">
		 <fieldset class="loginField" color="#E1E8ED">
		 <legend class="legend1">LogIn</legend>
<table cellspaccolspan="2"><?php if(isset($_GET['fail'])) echo "<font color=\"red\"><center>login error</center></font>";?></td></tr>
<tr><td>Username</td><td><input type="text" name="usernamee"></td></tr>
<tr><td>Password</td><td><input type="password" name="password"></td></tr>
 
 <tr><td <tr><td colspan="2"><?php if(isset($_GET['select'])) echo "<font color=\"green\">please select privlage</font>";?> </td> </tr>
</table>
   <table align="center" cellspacing="20">
    <tr><td><input type="Submit" class="submit" value="Login"/></td>
   <td><input type="reset" class="submit" value="clear"/></td></tr>
   </table>
   <h5 align ="center"> <a href="forgotpassword.php">Forgot password?</a></h5>
</fieldset>
</form>
 

 	 </body>
</html>






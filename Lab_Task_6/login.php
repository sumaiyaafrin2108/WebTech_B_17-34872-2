<?php

	if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'null'){
			echo "null submission...";
		}

		if($_REQUEST['msg'] == 'invalid'){
			echo "invalid userid/password";
		}

		if($_REQUEST['msg'] == 'login_first'){
			echo "please login first...";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>

	<table width="900px" border="0" align="center">
		<tr height="200px">
			<td colspan="3">
				<form method="post" action="logincheck.php">
					<table border="0" cellspacing="0" cellpadding="0" align="center">
		<tr>
			<td>
					<fieldset style="background: #F6CB92;">
						<legend>LOGIN</legend>

			  User Id:<input type="text" name="id" value=""><br>
	    	  <hr>
	    	  Password:<input type="Password" name="password" value=""><br>
	    	  <hr>
	    	  <input type="checkbox" name="rm" value="">Remember Me<br>
	    	  <input type="submit" name="submit" value="Submit">
	    	  <a href="forget_password.php"><b>Forget Password?</b></a> 
	    	  <br>
	    	  <a href="registration.php"><b>Sign Up</b></a> 

					</fieldset>
				</td>
			</tr>
		</table>
				</form>
			</td>
		</tr>
		
	</table>
</body>
</html>
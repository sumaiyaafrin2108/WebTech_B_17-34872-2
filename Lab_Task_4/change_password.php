<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<html>
<head>
	<title>CHANGE PASSWORD</title>
</head>
<body>

	<?php include 'header.php';?>
			<td>
				<form>
			<fieldset>
			<legend><h1><b>CHANGE PASSWORD</b></h1></legend>
	    	
	    	  Current Password:<input type="Password" name="password" value=""><br>
	    	  <br>
	       
	    	  New Password:<input type="Password" name="password" value="" > <br>

	    	 Retype New Password: <input type="Password" name="password" value="" > 
	    	 <hr>
				<input type="submit" name="submit" value="submit">
		       
      </fieldset>
	</form>	
			</td>
		</tr>
				
		<tr height="50px">
			<td colspan="3" align="center">
				Copyright@2017
			</td>
		</tr>
	</table>
</body>
</html>


<?php

	}else{
		header('location: login.php?msg=login_first');
	}

?>
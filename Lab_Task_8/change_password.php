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
				<form class="st">
			<fieldset>
			<h2 align="center"> CHANGE PASSWORD</h2>
			<h2 id="head"></h2>

	    	<div class="txt_field">
	    	  <input type="Password" id="name" name="password" value="" onkeyup="f1()" onclick="f1()">
	    	  <span></span>
			   <label>Current Password</label>
	    	</div>
	    	<div class="txt_field">
	    	 <input type="Password" id="name" name="password" value="" onkeyup="f1()" onclick="f1()">
	    	   <label>New Password</label>
	    	</div>
	    	<div class="txt_field">
	    	  <input type="Password" id="name" name="password" value="" onkeyup="f1()" onclick="f1()"> 
	    	  <label>Retype New Password</label>
	    	</div>
	    	<script type="text/javascript" src="script.js"></script>
				<input type="submit" name="submit" value="submit">
		       
      </fieldset>
	</form>	
			</td>
		</tr>
				
		<tr height="50px" class="header">
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
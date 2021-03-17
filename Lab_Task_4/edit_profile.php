<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<html>
<head>
	<title>EDIT PROFILE</title>
</head>
<body>

	<?php include 'header.php';?>
			<td>
				<form>
			<fieldset>
			<legend><h1><b>EDIT PROFILE</b></h1></legend>
	    	
	    	  Name:<input type="text" name="name" value=" <?php echo $_SESSION['uname']?>"><br>
	    	  <hr>
	       
	    	  Email:<input type="email" name="email" value="<?php echo $_SESSION['email']?>" > 
			<button title="hint:sample@example.com"><b>i</b></button><br>
	        <hr>

	    	  Gender:  <input type="radio" name="gender" value="Male" <?php if($_SESSION['gender'] =="Male")
		{echo "checked";}?>> Male 
				<input type="radio" name="gender" value="Female" <?php if($_SESSION['gender'] =="Female")
		{echo "checked";}?> > Female
				<input type="radio" name="gender" value="Other" <?php if($_SESSION['gender']  =="Other")
		{echo "checked";}?>> Other <br>
				<hr>
				
	       Date of Birth:<input type="text" name="dob"  value="<?php echo $_SESSION['dd']?>/<?php echo $_SESSION['mm']?>/<?php echo $_SESSION['yyyy']?>">
			  <i>(dd/mm/yyyy)</i><br>
	    
				<input type="submit" name="submit" value="Submit">
		       
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
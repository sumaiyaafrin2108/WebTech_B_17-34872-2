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
				<form class="st">
			<fieldset>
				<h2 align="center">EDIT PROFILE</h2>
			<div class="txt_field">
	    	
	    	<input type="text" name="name" value=" <?php echo $_SESSION['uname']?>"><span></span>
			<label>User Name</label>
	    	</div>
	    	<div class="txt_field">
	    	<input type="email" name="email" value="<?php echo $_SESSION['email']?>" > 
			<span></span>
			<label>Email</label>
	    	</div>
	       <label>Gender</label></br>
	    	<input type="radio" name="gender" value="Male" <?php if($_SESSION['gender'] =="Male")
		{echo "checked";}?>> Male 
				<input type="radio" name="gender" value="Female" <?php if($_SESSION['gender'] =="Female")
		{echo "checked";}?> > Female
				<input type="radio" name="gender" value="Other" <?php if($_SESSION['gender']  =="Other")
		{echo "checked";}?>> Other
		

            <div class="txt_field">
	       <input type="text" name="dob"  value="<?php echo $_SESSION['dd']?>/<?php echo $_SESSION['mm']?>/<?php echo $_SESSION['yyyy']?>">
			  <i>(dd/mm/yyyy)</i>
			  <span></span>
			<label>Date of Birth</label>
	    	</div>	    
				<input type="submit" name="submit" value="Submit">
		       
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
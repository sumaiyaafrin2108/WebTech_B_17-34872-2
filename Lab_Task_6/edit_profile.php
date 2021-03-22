<?php
    require_once('usersService.php');
 global $id;

	$profile = user();
?>
<html>
<head>
	<title>EDIT PROFILE</title>
</head>
<body>

	<?php include 'header.php';?>
			<td width="450px" height="300px" colspan="3">
				<form>
			<fieldset>
			<legend><h3><b>EDIT PROFILE</b></h3></legend>
			<?php 
			for($i=0; $i < count($profile); $i++) {
		?>
	    	
	    	  Name:<input type="text" name="name" value=" <?= $profile[$i]['name'] ?>"><br>
	    	  <hr>
	       
	    	  Email:<input type="email" name="email" value="<?= $profile[$i]['email'] ?>" > 
			<button title="hint:sample@example.com"><b>i</b></button><br>
	        <hr>

	    	  Gender:  <input type="radio" name="gender" value="Male" 
		> Male 
				<input type="radio" name="gender" value="Female" <?php
		{echo "checked";}?> > Female
				<input type="radio" name="gender" value="Other" >
				 Other <br>
				<hr>
				
	       Date of Birth:<input type="text" name="dob"  value="<?= $profile[$i]['dob'] ?>" >
			  <i>(dd/mm/yyyy)</i><br>
			  <?php } ?>
			  <hr>
	    
				<input type="submit" name="submit" value="Submit">
		       
      </fieldset>
	</form>	
			</td>
		</tr>
	</table>
</body>
</html>

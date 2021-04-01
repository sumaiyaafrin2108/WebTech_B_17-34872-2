<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<html>
<head>
	<title>VIEW PROFILE</title>
</head>
<body>

	<?php include('header.php');?>
			<td>
				<form class="st">
					<fieldset>
						<legend><b>PROFILE PICTURE</b></legend>
						<img src="pic2.png" width="100px" height="100px" ><br>
                         <a href="profile_picture.php">
                         <input type="file" name="picture"  > <hr>
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
<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<html>
<head>
	<title>VIEW PROFILE</title>
</head>
<body>

	<?php include 'header.php';?>
			<td>
				<form class="st">
					<fieldset>
						<legend><b>PROFILE</b></legend>
						<b>Name:</b> <?php echo $_SESSION['uname']?><hr>
						<table align="right">
							<tr >
								<td><img src="pic2.png" width="100px" height="100px" align="right"><br>
                         <a href="profile_picture.php">Change</a><br></td>
							</tr>
						</table>
						<b>Email:</b> <?php echo $_SESSION['email']?><hr>
						<b>Gender:</b> <?php echo $_SESSION['gender']?><hr>
						<b>Date of Birth:</b><?php echo $_SESSION['dd']?>/<?php echo $_SESSION['mm']?>/<?php echo $_SESSION['yyyy']?><hr>

						<a href="edit_profile.php">Edit Profile</a>
            </td>
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
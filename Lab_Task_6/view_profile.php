<?php
    require_once('usersService.php');
 global $id;

	$profile = user();
?>
<html>
<head>
	<title>VIEW PROFILE</title>
</head>
<body>

	<?php include 'header.php';?>
			<td width="450px" height="300px" colspan="3">
				<form>
					<fieldset>
						<legend><b>PROFILE</b></legend>
						<?php 
			for($i=0; $i < count($profile); $i++) {
		?>
						<b>Name:</b> <?= $profile[$i]['name'] ?><hr>
						<table align="right">
							<tr>
								<td><img src="pic1.jpg" width="100px" height="150px" align="right"><br>
                         <br></td>
							</tr>
						</table>
						<b>Email:</b> <?= $profile[$i]['email'] ?><hr>
						<b>Gender:</b> <?= $profile[$i]['gender'] ?><hr>
						<b>Date of Birth:</b><?= $profile[$i]['dob'] ?><hr>
						
		<?php } ?>

						<a href="edit_profile.php">Edit Profile</a>
            </td>
					</fieldset>
				</form>
			</td>
		</tr>
	</table>
</body>
</html>

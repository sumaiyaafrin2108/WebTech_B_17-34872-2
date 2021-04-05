 <link rel="stylesheet" href="style.css">
<table width="900px" border="1" align="center" >
		<tr colspan="3" class="header">
			<td width="100px">
				<img src="pic1.png" width="100px" height="100px" ></td>
				<td align="right">
				<b>Logged in as <a href="view_profile.php"><?php echo $_SESSION['uname']?></a>|
	             <a href="logout.php">Logout</a></b>
			</td>
		</tr>

		<tr width="200px">
			<td width="200px" class="dash">
				<b>Account</b>
				<hr>
				<ul>
				<li><a href="login_dash.php">Dashboard</a></li>
				<li><a href="view_profile.php">View Profile</a></li>
				<li><a href="edit_profile.php">Edit Profile</a></li>
				<li><a href="profile_picture.php">Change Profile Picture</a></li>
				<li><a href="change_password.php">Change Password</a></li>
				<li><a href="logout.php">Logout</a></li>
				</ul>
			</td>
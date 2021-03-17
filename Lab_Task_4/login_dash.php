<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<html>
<head>
	<title>LOGGED IN DASHBOARD</title>
</head>
<body>

	<?php include 'header.php';?>
			<td><h1>Welcome <?php echo $_SESSION['uname']?></h1></td>
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
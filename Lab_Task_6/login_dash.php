<?php
    require_once('usersService.php');

	$profile = user();
?>

<html>
<head>
	<title>LOGGED IN DASHBOARD</title>
</head>
<body>

	<?php include 'header.php';?>
			<td width="450px" height="300px" colspan="3" align="center">
				<img src="pic1.jpg" width="100px" height="200px" >
			    </br>
			 <?php 
			for($i=0; $i < count($profile); $i++) {
		?>
			 <h1>Welcome <?= $profile[$i]['name'] ?></h1>
			<?php } ?>
		</td>
		</tr>
	</table>
</body>
</html>


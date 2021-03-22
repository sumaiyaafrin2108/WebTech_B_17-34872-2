<?php
	//session_start();
	require_once('usersService.php');

	if(isset($_REQUEST['submit'])){
		$id = $_REQUEST['id'];
		$password = $_REQUEST['password'];

		if(empty($id) || empty($password)){
			//echo "null submission";
			header('location:login.php?msg=null');
		}else{

			$user = [
				'id'=> $id,
				'password'=> $password
			];

			$status = validate($user);

			if($status){
				setcookie('flag', $name, time()+3600, '/');
				header('location:login_dash.php');
			}else{
				header('location:login.php?msg=invalid');
			}
		}
	}else{
		header('location:login.php');
	}
	

?>
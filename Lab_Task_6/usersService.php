<?php

	require_once('db.php');

	function validate($user){
			
		$conn = getConnection();
		$sql = "select * from registration where id='{$user['id']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}

	}


	function registration($user){

		$conn = getConnection();
		$sql = "insert into registration(name, email, id, password, gender, dob) values ('{$user['name']}', '{$user['email']}','{$user['id']}', '{$user['password']}','{$user['gender']}','{$user['dob']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}

	function user(){

		$conn = getConnection();
		$sql = "select * from registration";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}


?>
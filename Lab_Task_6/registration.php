<?php
    require_once('usersService.php');

	 $gender ="";
	 $user ="";
	if (isset($_REQUEST['submit'])){

   
		  $name = $_POST['name'];
		  $id = $_POST['id'];
		  $email = $_POST['email'];
		  $password = $_POST['password'];
		  $gender = $_POST["gender"];
		  $dob = $_POST['dob'];
		  $error = "";
		  $error1 = "";
		  $error2 = "";
		  $error3 = "";
		  $error4 = "";
		  $error5 = "";
		  $error6 = "";
		  $error7 = "";

	    if(empty($name))
	    {
	    	$error .="Name is required!";
			
	    }
		  
		elseif(strlen($name)<=5)
		    {
			 $error .="Length is too Short!";
			
		    }	
		elseif(!preg_match("/^[a-zA-Z- ]*$/",$name))
		 {
		 	  $error .="Please Enter Name as String and start with a letter";
		 }

		 if(empty($email))
	    {
	    	$error1 .="Please enter your email!";
			
	    }


		elseif (!preg_match("/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/",$email))
	    {
			$error1 .=" Please Enter Valid Email Address";
		}

		if(empty($id))
	    {
	    	$error7 .="Please enter your ID!";
			
	    }
	    elseif (!preg_match("/^([0-9\.]+-+[0-9]+-+[0-9])$/",$id))
	    {
			$error7 .=" Please Enter Valid ID";
		}
	    elseif(strlen($id)!=10)
	    {
	    	$error7 .= "Invalid Id";
	    }

		if(empty($password))
	    {
	    	$error3 .="Password is required!";
			
	    }
	    elseif(!preg_match("/^([A-Z\.]+[a-z]+[0-9]+[%$&])$/",$password)|| strlen($password)!=5)
	    {
	    	$error3 .="Not a valid Password!";
			
	    }
       else{
        $user = [
                'name' => $name,
                'email'=>$email,
                'id' => $id,
                'password'=> $password,
                'gender' => $gender,
                'dob' => $dob

                
            ];

    registration($user);
    echo "Registration Done !";
    echo "You can Login Now !!";
}
}
?>
<html>
<head>
	<title>REGISTRATION</title>
</head>
<body>

	<table width="900px" border="0" align="center" >
		<tr height="200px">
			<td colspan="3">
		<form method="POST">
			<table border="0" cellspacing="0" cellpadding="0" align="center">
		<tr>
			<td>
			<fieldset style="background: #F6CB92;">
			<legend><h2><b>REGISTRATION</b></h2></legend>
	    	
	    	  User Name:<input type="text" name="name" value=""><?php
					if (isset($error))						
	                {echo $error ;}
                    ?><br>
	    	  <hr>
	       
	    	  Email:<input type="email" name="email" value="" > 
			<button title="hint:sample@example.com"><b>i</b></button><?php
					if (isset($error1))						
	                {echo $error1 ;}
                    ?><br>
	        <hr>

	    	  User Id:<input type="text" name="id" value=""><?php
					if (isset($error7))						
	                {echo $error7 ;}
                    ?><br>
	    	  <hr>
	    	  Password:<input type="Password" name="password" value=""><?php
					if (isset($error3))						
	                {echo $error3 ;}
                    ?><br>
	    	  <hr>
	    <fieldset>
	   	<legend>Gender</legend>
	    <input type="radio" name="gender" value="Male"<?php if($gender =="Male")
		{echo "checked";}?>>Male 
					           <input type="radio" name="gender" value ="Female" <?php if($gender =="Female")
		{echo "checked";}?>>Female 
					           <input type="radio" name="gender" value ="Others"<?php if($gender =="Others")
		{echo "checked";}?>> Others 
					           <br/>
					<hr/>
				</fieldset>
	       <fieldset>
	       	<legend>Date of Birth</legend>
	    	   <input type="Date" name="dob" value=""><i>(dd/mm/yyyy)</i><?php
					if (isset($error5))						
	                {echo $error5 ;}?>
	        </fieldset>
	    
				<input type="submit" name="submit" value="Submit">
		        <input type="reset" name="reset" value="Reset"> <br>
		        <a href="login.php">Sign In</a>
      </fieldset>
  </td>
</tr>
</table>
	</form>	
</td>
	</tr>	
		
	</table>
</body>
</html>

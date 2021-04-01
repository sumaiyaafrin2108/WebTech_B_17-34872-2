<html>
<head>
	<title>REGISTRATION</title>
</head>
<body>
<link rel="stylesheet" href="style.css">
	<table width="900px" border="1" align="center">
		<tr colspan="3" class="header">
			<td width="100px">
				<img src="pic1.png" width="100px" height="100px" ></td>
				<td align="right">
				<a href="public_home.php"><b>Home</b></a> | 
				<a href="login.php"><b>Login</b></a> | 
				<a href="registration.php"><b>Registration</b></a> 
			</td>
		</tr>
		<tr height="200px">
			<td colspan="3">
		<form method="POST" action="logincheck.php">
			<table border="0" cellspacing="0" cellpadding="0" align="center"  class="st">
		<tr>
			<td>
			<fieldset>
			<h2 align="center">REGISTRATION</h2>
	    	<div class="txt_field">
	    	 <input type="text" name="name" value="">
	    	 <span></span>
			 <label>Name</label>
	    	</div>
	       <div class="txt_field">
	    	 <input type="email" name="email" value="" > 
			<span></span>
			<label>Email</label>
	    	</div>
            <div class="txt_field">
	    	<input type="text" name="uname" value=""><span></span>
			 <label>User Name</label>
	    	</div>
	    	  <div class="txt_field">
	    	 <input type="Password" name="password" value=""><span></span>
			 <label>Password</label>
	    	</div>
	   <fieldset>

	   	<legend>Gender</legend>
	    	   <input type="radio" name="gender" value="Male" > Male 
				<input type="radio" name="gender" value="Female" > Female
				<input type="radio" name="gender" value="Other"> Other <br>

			</fieldset>


	       <fieldset>

	       	<legend>Date of Birth</legend>
	    	  <b>dd</b><input type="text" name="dd" size="1" value="">/
			<b>mm</b><input type="text" name="mm" size="1" value=""> /
			<b>yyyy</b><input type="text" name="yyyy" size="3" value="">  <i>(dd/mm/yyyy)</i>

	    </fieldset>
	    
				<input type="submit" name="submit" value="Submit">
		        <input type="submit" name="submit" value="Reset"> <br>
      </fieldset>
  </td>
</tr>
</table>
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

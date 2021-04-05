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
			<h2 id="head"></h2>

	<b id="1"></b><b id="2"></b><b id="3"></b><b id="4"></b><b id="5"></b>
<br>
	<h3 id="6"></h3>
	<h3 id="7"></h3>
	<h3 id="8"></h3>
	    	<div class="txt_field">
	    	 <input type="text" id="name" name="name" value="" onkeyup="f1()" onclick="f1()">
	    	 <span></span>
			 <label>Name</label>
	    	</div>
	       <div class="txt_field">
	    	 <input type="email" id="email" name="email" value="" onkeyup="f2()" onclick="f2()"> 
			<span></span>
			<label>Email</label>
	    	</div>
            <div class="txt_field">
	    	<input type="text" id="uname" name="uname" value="" onkeyup="f6()" onclick="f6()">
	    	<span></span>
			 <label>User Name</label>
	    	</div>
	    	  <div class="txt_field">
	    	 <input type="Password" name="password" value="" ><span></span>
			 <label>Password</label>
	    	</div>
	   <fieldset>

	    	   <legend><b>GENDER</b></legend>
			    <input type="radio" id="m" name="gender" value="Male" onkeyup="f3()" onclick="f3()"> Male 
				<input type="radio" id="f" name="gender" value="Female" onkeyup="f3()" onclick="f3()"> Female
				<input type="radio" id="o" name="gender" value="Other" onkeyup="f3()" onclick="f3()"> Other <br>
				<hr>

</fieldset>
	       <fieldset>
			<legend><b>DATE OF BIRTH</b></legend>
			<b>dd</b><input type="text" id="dd" name="dd" size="1">/
			<b>mm</b><input type="text" id="mm" name="mm" size="1"> /
			<b>yyyy</b><input type="text" id="yy" name="yyyy" size="3" onkeyup="f4()" onclick="f4()"> <br>
			  <i>(dd/mm/yyyy)</i>
<hr>
	    </fieldset>
	    
				<input type="submit" name="submit" value="Submit">
		        <input type="submit" name="submit" value="Reset"> <br>
      </fieldset>
      <script type="text/javascript" src="script.js"></script>
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

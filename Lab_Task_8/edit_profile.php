<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<html>
<head>
	<title>EDIT PROFILE</title>
</head>
<body>

	<?php include 'header.php';?>
			<td>
				<form class="st">
			<fieldset>
				<h2 align="center">EDIT PROFILE</h2>
				<h2 id="head"></h2>

	<b id="1"></b><b id="2"></b><b id="3"></b><b id="4"></b><b id="5"></b>
<br>
	<h3 id="6"></h3>
	<h3 id="7"></h3>
	<h3 id="8"></h3>
			<div class="txt_field">
	    	
	    	<input type="text" id="name" name="name" value=" <?php echo $_SESSION['uname']?>" onkeyup="f1()" onclick="f1()"><span></span>
			<label>User Name</label>
	    	</div>
	    	<div class="txt_field">
	    	<input type="email" id="email" name="email" value="<?php echo $_SESSION['email']?>" onkeyup="f2()" onclick="f2()"> 
			<span></span>
			<label>Email</label>
	    	</div>
<div>
	       <label>Gender</label></br></br>
	    	<input type="radio" id = "m" name="gender" value="Male" <?php if($_SESSION['gender'] =="Male")
		{echo "checked";}?>onkeyup="f3()" onclick="f3()"> Male 
				<input type="radio" id = "f" name="gender" value="Female" <?php if($_SESSION['gender'] =="Female")
		{echo "checked";}?> onkeyup="f3()" onclick="f3()"> Female
				<input type="radio" id = "o" name="gender" value="Other" <?php if($_SESSION['gender']  =="Other")
		{echo "checked";}?>onkeyup="f3()" onclick="f3()"> Other
		<hr>
</div>
            <div>
           <label>Date of Birth</label><br><br>
            dd<input type="text" id="dd" name="dd" size="1" value="<?php echo $_SESSION['dd']?>" >/
			mm<input type="text" id="mm" name="mm" size="1" value="<?php echo $_SESSION['mm']?>"> /
			yyyy<input type="text" id="yy" name="yyyy" size="3" value="<?php echo $_SESSION['yyyy']?>" onkeyup="f4()" onclick="f4()">
			  <i>(dd/mm/yyyy)</i>
			  <hr>
	    	</div>	    
				<input type="submit" name="submit" value="Submit">
		       
      </fieldset>
	</form>	
	 <script type="text/javascript" src="script.js"></script>
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
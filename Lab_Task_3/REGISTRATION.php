<?php
     $gender ="";
     $user ="";
    if (isset($_REQUEST['submit'])){

   
          $name = $_POST['name'];
          $email = $_POST['email'];
          $uname = $_POST['uname'];
          $pass = $_POST['password'];
          $cPass = $_POST['cpassword'];
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

        if(empty($uname))
        {
            $error7 .="Please enter your User Name!";
            
        }
        elseif(strlen($uname)<2)
        {
            $error7 .= "Invalid User Name";
        }

        if(empty($pass))
        {
            $error3 .="Password is required!";
            
        }
        elseif(!preg_match("/^([a-zA-Z0-9\.]+[%$&])$/",$pass))
        {
            $error3 .="Password must contain at least one of the special characters!";
            
        }
        elseif(strlen($pass)<8)
        {
           $error3 .="Password must not be less than eight (8) characters"; 
        }
         
        if(empty($cPass))
        {
            $error4 .="Please Confirm Password!";
            
        }
        elseif($pass != $cPass)
        {
            $error3 .="Password Doesn't Match!"; 
        }
        
        if(empty($dob))
        {
            $error6 .="Please enter your Birth Date!";
            
        }
        
       else{
         $info = $name ."|". $email."|".$uname ."|".$pass . "|".$cPass."|". $gender."|".$dob ."|"."\r\n";
         $myfile = fopen("test.txt", "a");
         fwrite($myfile, $info);
         fclose($myfile);
          echo "Registrstion Done!";
         
          }
        }
            
?>


        <html>
<head></head>
<body>
<center>
<form method ="post" action="">
    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="600px">
                <fieldset>
                    <legend><h3>REGISTRATION</h3></legend>
                    Name<br/><input type="text" name ="name">
                    <?php
                    if (isset($error))                      
                    {echo $error ;}
                    ?><br/>
                    <hr>
                    Email<br/><input type="text" name ="email">
                    <?php
                    if (isset($error1))                     
                    {echo $error1 ;}
                    ?>
                    <br/>
                    <hr>
                    User Name<br/><input type="text" name="uname">
                    <?php
                    if (isset($error7))                     
                    {echo $error7 ;}
                    ?><br/>
                    <hr>
                    Password<br/><input type="password" name ="password">
                    <?php
                    if (isset($error3))                     
                    {echo $error3 ;}
                    ?>
                    <br/>
                    <hr>                                                                                 
                    Confirm Password<br/><input type ="password" name ="cpassword">
                    <?php
                    if (isset($error4))                     
                    {echo $error4 ;}
                    ?>
                    <br/>
                    <hr>
                   
                    Gender<br/><input type="radio" name="gender" value="Male"<?php if($gender =="Male")
        {echo "checked";}?>>Male 
                               <input type="radio" name="gender" value ="Female" <?php if($gender =="Female")
        {echo "checked";}?>>Female 
                               <input type="radio" name="gender" value ="Others"<?php if($gender =="Others")
        {echo "checked";}?>> Others 
                               <br/>
                    <hr/>
                    Date of Birth<br/><input type="Date" name="dob">
                    <?php
                    if (isset($error5))                     
                    {echo $error5 ;}
                    ?><br/>
                    <hr/>
                    
                    <input type="submit" name="submit" value="Submit">
                    <input type="submit" name="submit" value="Reset">
                    <hr>
                    
                </fieldset>
            </td>
        </tr>                                
    </table>
</form>
</center>
</body>
</html>     




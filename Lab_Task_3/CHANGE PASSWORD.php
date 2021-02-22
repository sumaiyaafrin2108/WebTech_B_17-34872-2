<?php

        $myfile = fopen("test.txt", "r");
        $readfile = fread($myfile, filesize("test.txt"));
        $data = explode("|", $readfile);
    
        if (isset($_REQUEST['submit'])){
            $pass = $_REQUEST['pass'];
            $npass = $_REQUEST['npass'];
            $rpass = $_REQUEST['rpass'];
            $error = "";
            $error1 = "";
            $error2 = "";

        if(empty($pass))
        {
            $error .="Password is required!";
            
        }
        elseif($data[3] != $pass)
        {
            $error .="Current Password Doesn't Match!";
        }
        if (empty($npass))
         {
            $error1 .="Type Password!";
        }
        elseif(!preg_match("/^([a-zA-Z0-9\.]+[%$&])$/",$pass))
        {
            $error1 .="Password must contain at least one of the special characters!";
            
        }
        elseif(strlen($pass)<8)
        {
           $error1 .="Password must not be less than eight (8) characters"; 
        }
         
        elseif ($data[3] == $npass || $data[3] == $rpass) 
        {
            $error1 .="Invalid! All Passwords are same.";
        }
         
        if( empty($rpass))
        {
            $error2 .="Type Password!";
            
        }
        elseif($npass != $rpass)
        {
            $error2 .="Password Doesn't Match!"; 
        }
        elseif(!empty($pass) || !empty($npass) || !empty($rpass))
        {
            
            echo "Password has Changed";
        }
       
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
</head>
<body>
    <form method="post">
     <table width="500px" border="3px" align="center">
       <tr>            
            <td>                
                <fieldset>
                        <legend><b>CHANGE PASSWORD</b></legend>
                        <Label for="currentpassword">Current Password</Label>
                        <input type="password" name="pass" value="" ><?php
                    if (isset($error))                      
                    {echo $error ;}
                    ?> <br> <br>
                        <Label for="newpassword" style="color: green;"> New Password</Label>
                        <input type="password" name="npass" value="" ><?php
                    if (isset($error1))                     
                    {echo $error1 ;}
                    ?>  <br> <br>
                        <Label for="retypenewpassword" style="color: red;">Retype New Password</Label>
                        <input type="password" name="rpass" value="" ><?php
                    if (isset($error2))                     
                    {echo $error2 ;}
                    ?> <br>
                        <hr>   
                       <input type="submit" name="submit" value="Submit">

                </fieldset>

                </td>        
            </tr>  
      </table>
    </form>
</body>
</html>
<?php
   include("config.php");
   session_start();
   
   $error = "";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      

      $sql = "SELECT u_id FROM users WHERE u_name = '$myusername' and u_password = '$mypassword'";
	  
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      

		
      if($count == 1) {

         $_SESSION['login_user'] = $myusername;
         $error = "";         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
    <div align="center">
    
    <table width="100%" border="0">
  <tr>
    <td align="center"><h1>MESSAGE BOARD</h1></td>
  </tr>
</table>

    
	</div>
    
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php 
			   
			   echo $error;  

			   
			   
			   
			   ?></div>
               
               
               
					
            </div>
				
         </div>
			
      </div>
<div>
    <table width="100%" border="0">
    <br />
  <tr>
    <td align="center">a project submitted by SATISH</td>
    
  </tr>
</table>      
</div>
   </body>
</html>
<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('mahmoud@gmail.com' => '123456','mohamed@gmail.com' => '234567','ahmed@gmail.com' => '345678');
		
		/* Check and assign submitted Username and Password to new variable */
		$email = isset($_POST['email']) ? $_POST['email'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$email]) && $logins[$email] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['EmailData']['email']=$logins[$email];
			header("location:index.php");
			exit;
		} else {
	          	echo "Unsuccessful attempt: Set error message"; 
 	        	}
	}
?>
<!doctype html>
<html>
<head>
 
<title>PHP Login logup session</title>
 </head>
<body>
 
 
<form action="" method="post" name="Login_Form">

  <?php if(isset($msg))
     echo $msg;
    ?>
      
      <input name="email" type="text"> 
   
      < <input name="Password" type="password"> 
     
        <input name="Submit" type="submit" value="login">
  
</form>
</body>
</html>
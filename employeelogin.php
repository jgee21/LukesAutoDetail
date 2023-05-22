<?php
     session_start();
     $_SESSION = array();
     session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Employee Login</title>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <!--<link rel="stylesheet" type="text/css" href="loginstyle.css">-->
</head>

<body>
<h2>Log In</h2>

<h3>Employee Login</h3>
<form method="POST" action="verifylogin.php?<?php
          echo SID; ?>">
<p>Enter your name:
     <input type="text" name="name" /></p>
<p>Enter your password:
     <input type="password" name="password" /></p>
<p><b>(Passwords are case-sensitive and 
     must be at least 6 characters long)</b></p>
<input type="reset" name="reset" 
     value="Reset Login Form" />
<input type="submit" name="login" value="Log In" />
</form>

<h3>Employee Registration</h3>
<form method="POST" action="registeremployee.php?<?php
          echo SID; ?>">
<p>Enter your name (First and Last no spaces):
     <input type="text" name="name" /></p>
<p>Enter a password for your account:
     <input type="password" name="password" /></p>
<p>Confirm your password:
     <input type="password" name="password2" /></p>
<p><b>(Passwords are case-sensitive and 
     must be at least 6 characters long)</b></p>
<input type="reset" name="reset" 
     value="Reset Registration Form" />
<input type="submit" name="register" value="Register" />
</form>

</body>
</html>

<?php
session_start();

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Verify Login</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>LAD Employee</h1>
<h2>Verify Login</h2>
<?php
$errors = 0;
require_once 'DBConnect.php';
$TableName = "employees";
if ($errors == 0) {
     $SQLstring = "SELECT ID, name FROM $TableName "
          . " where name='" . stripslashes($_POST['name']) . 
          "' and password_md5='" . 
          md5(stripslashes($_POST['password'])) . "'";
     $QueryResult = @mysqli_query($DBConnect, $SQLstring);
     if (mysqli_num_rows($QueryResult)==0) {
          echo "<p>The email address/password " . 
               " combination entered is not valid.</p>\n";
          ++$errors;
     }
     else {
          $Row = mysqli_fetch_assoc($QueryResult);
          $_SESSION['ID'] = $Row['ID'];
          $Name = $Row['name'];
          echo "<p>Welcome back, $Name!</p>\n";     }
}
if ($errors > 0) {
     echo "<p>Please use your browser's BACK button to return " .
          " to the form and fix the errors indicated.</p>\n";
}
if ($errors == 0) {
echo "<p><a href='DetailGuide.html?" .
          SID . "'>Detail Guide</a></p>\n";
echo "<p><a href='OpenTickets.php?" .
          SID . "'>Open Jobs</a></p>\n";
}

?>
</body>
</html>


<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$DBConnect = @mysqli_connect("localhost:8889", "root", "root");
if ($DBConnect === FALSE) {
     echo "<p>Unable to connect to the database server. " . 
          "Error code " . mysqli_errno() . ": " . 
          mysqli_error() . "</p>\n";
     ++$errors;
}
else {
     $DBName = "lad";
     $result = @mysqli_select_db($DBConnect, $DBName);
     if ($result === FALSE) {
          echo "<p>Unable to select the database. " . 
               "Error code " . mysqli_errno($DBConnect) . ": " .
               mysqli_error($DBConnect) . "</p>\n";
          ++$errors;
     }
}

?>
<?php
session_start();

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$Body = "";
$errors = 0;
$name = "";
if (empty($_POST['name'])) {
    ++$errors;
    $Body .= "<p>You need to enter your name.</p>\n";
}
else {
    $name = stripslashes($_POST['name']);
    // you can add other validation checks or processing here as needed
}

if (empty($_POST['password'])) {
    ++$errors;
    $Body .= "<p>You need to enter a password.</p>\n";
    $password = "";
}
else
    $password = stripslashes($_POST['password']);
if (empty($_POST['password2'])) {
    ++$errors;
    $Body .= "<p>You need to enter a confirmation password.</p>\n";
    $password2 = "";
}
else
    $password2 = stripslashes($_POST['password2']);
if ((!(empty($password))) && (!(empty($password2)))) {
    if (strlen($password) < 6) {
        ++$errors;
        $Body .= "<p>The password is too short.</p>\n";
        $password = "";
        $password2 = "";
    }
    if ($password <> $password2) {
        ++$errors;
        $Body .= "<p>The passwords do not match.</p>\n";
        $password = "";
        $password2 = "";
    }
}
if ($errors == 0) {
    require_once 'DBConnect.php';
}
$TableName = "employees";
if ($errors == 0) {
    $SQLstring = "SELECT count(*) FROM $TableName " .
        "where name='$name'";
    $QueryResult = @mysqli_query($DBConnect, $SQLstring);
    if ($QueryResult !== FALSE) {
        $Row = mysqli_fetch_row($QueryResult);
        if ($Row[0]>0) {
            $Body .= "<p>The name entered (" .
                htmlentities($name) .
                ") is already registered.</p>\n";
            ++$errors;
        }
    }
}
if ($errors > 0) {
    $Body .= "<p>Please use your browser's BACK button to return " .
        " to the form and fix the errors indicated.</p>\n";
}
if ($errors == 0) {
    $SQLstring = "INSERT INTO $TableName " .
        " (name, position, signature, password_md5) " .
        " VALUES( '$name', 'NULL', 'NULL', '" . md5($password) . "')";

    $QueryResult = @mysqli_query($DBConnect, $SQLstring);

    if ($QueryResult === FALSE) {
        $Body .= "<p>Unable to save your registration " .
            " information. Error code " .
            mysqli_errno($DBConnect) . ": " .
            mysqli_error($DBConnect) . "</p>\n";
        ++$errors;
    }
    else {
        $_SESSION['ID'] = mysqli_insert_id($DBConnect);
    }
    setcookie("ID", $_SESSION['ID']);
    mysqli_close($DBConnect);
}
if ($errors == 0) {
    $EmployeeName = $name;
    $Body .= "<p>Thank you, $EmployeeName. ";
    $Body .= "Your ID is <strong>" .
        $_SESSION['ID'] . "</strong>.</p>\n";
}
if ($errors == 0) {
    $Body .= "<p><a href='detailguide.php?" .
        SID . "'>Detail Guide</a></p>\n";
    $Body .= "<p><a href='openjobs.php?" .
        SID . "'>Current Jobs</a></p>\n";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Employee Registration</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Lukes Auto Detailing</h1>
<h2>Employee Registration</h2>
<?php
echo $Body;
?>
</body>
</html>


<?php
session_start();

// Unsets all the session variables
$_SESSION = array();

// Destroys the session
session_destroy();

// Redirect to the login page
header("location: login.php");
exit;
?>
<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Delete the cookie
setcookie('username', '', time() - 3600, '/');

// Redirect to the login page
header("Location: login_form.php");
exit();
?>

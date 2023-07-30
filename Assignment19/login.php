<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password (You can implement your own validation logic here)
    // Assuming valid credentials for demonstration purposes
    if ($username == "admin" && $password == "password") {
        // Set session variables
        $_SESSION['username'] = $username;

        // Set cookie to remember the user
        setcookie('username', $username, time() + (86400 * 30), "/"); // Cookie expires in 30 days

        // Redirect to a logged-in page
        header("Location: logged_in.php");
        exit();
    } else {
        // Invalid credentials, show error message
        echo "Invalid username or password";
    }
}
?>

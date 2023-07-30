<!DOCTYPE html>
<html>
<head>
    <title>Logged In</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
    <?php
    session_start();

    // Check if the user is logged in
    if (isset($_SESSION['username'])) {
        echo "<h2>Welcome, " . $_SESSION['username'] . "</h2>";
        echo "<p>This is a logged-in page.</p>";

        // Add a logout button
        echo '<form action="logout.php" method="POST">
                <input type="submit" value="Logout">
            </form>';
    } else {
        // If not logged in, redirect to login page
        header("Location: login_form.php");
        exit();
    }
    ?>
</body>
</html>

<?php
session_start();

// Check if the user submitted the login form
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are correct (you should have your own validation logic here)
    if ($username === 'admin' && $password === 'admin') {
        // If the login is successful, set a session variable to store user data
        $_SESSION['username'] = $username;

        // Redirect the user to the page where you want to display the saved data
        header('Location: admin_display_data.php');
        exit;
    } else {
        // Invalid login, display an error message
        echo "Invalid login. Please try again.";
    }
} else {
    echo "Please fill out the login form.";
}
?>

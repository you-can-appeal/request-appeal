<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    


    // Display user data or perform any other actions
    echo 
    
    //"Welcome, $username. Here's your saved data.";
    header('Location: admin_panel.php'); 
    
    // Display saved data from your database or wherever you have stored it.
} else {
    // If the user is not logged in, redirect them to the login page
    header('Location: index.php');
    exit;
}
?>

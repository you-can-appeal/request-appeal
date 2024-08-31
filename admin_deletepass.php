<?php
if (isset($_GET['line'])) {
    
    $lineNumber = (int)$_GET['line'];

    // Read the contents of the file
    $lines = file('password.txt');

    // Remove the selected line from the array
    unset($lines[$lineNumber - 1]);

    // Reindex the array
    $lines = array_values($lines);

    // Write the updated contents back to the file
   file_put_contents('password.txt', implode('', $lines));

    // Redirect to the display page
    header('Location: admin_display_passward.php');
} else {
    echo "Invalid request.";
}
?>

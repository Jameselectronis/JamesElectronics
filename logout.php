<?php
session_start(); // Start session to persist login state

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username and password (replace with your validation logic)
    $username = $_POST['jamese'];
    $password = $_POST['123456798'];

    // Example validation (replace with your actual validation logic)
    if ($username === 'admin' && $password === 'password') {
        // Simulate successful login
        $_SESSION['username'] = $username; // Store username in session
        header('Location: index.html'); // Redirect to homepage or secure area
        exit;
    } else {
        // Invalid credentials handling (redirect to login page with error flag)
        header('Location: login.html?login_error=1'); // Redirect with error flag
        exit;
    }
} else {
    // Redirect to login page if accessed directly without POST method (optional)
    header('Location: login.html');
    exit;
}
?>


<?php
session_start(); // Start session if not already started

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to homepage or login page after logout
header('Location: index.php');
exit;
?>

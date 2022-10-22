<?php
// Destroy the session when the user clicks on logout
// First grab the session
session_start();
// Reset the session array:
$_SESSION = [];
// Destory the session data on the server:
session_destory();
// Define a page title and include the header:
define('TITLE', 'Logout');
include('templates/header.html');
?>

<h2>Thank you for visiting Chieh Yang's Pizza!</h2>
<p>You have now been logged out</p>
<p>Thank you for using this site. Don't forget to sign up for hourly spam!</p>

<?php include('templates/footer.html'); ?>
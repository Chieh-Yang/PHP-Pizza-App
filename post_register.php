<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Chieh Yang's Registion </title>
<style type="text/css" media="screen">
.error { color:red;}
</style>
</head>

<body>
<?php
// This script receives data from register.html
print "<h1>Registration Confirmation</h1>";
// Initialize the flag variable
$okay = true;

// Validate the email address
if (empty($_POST['email'])) {
	print '<p class="error"> Please enter your email address.</p>';
	$okay = false;
}

// Validate the password address
if (empty($_POST['password'])) {
	print '<p class="error"> Please enter your password.</p>';
	$okay = false;
}

// Check to see if the password = entries match
if ($_POST['password'] != $_POST['confirm']) {
	print '<p class="error"> Passwords do not match</P>';
	$okay = false;
}

// Validate the year of birth
if (is_numeric($_POST['year'])) {
	$age = date('Y') - $_POST['year']; // Calculate age by subtracting from the current year
} else {
	print '<p class="error"> Please enter a vaild year of birth.</p>';
	$okay = false;
}

// born this year of in the future? on way!
// Note in date('Y'), it has to be an upper case Y

if ($_POST['year'] >= date('Y')) {
	print '<p class="error">Double check your birth date!</p>';
	$okay = false;
}

// Validate the Colour
switch ($_POST['colour']){
	case 'black':
		$colour_type = 'Midnight';
		break;
	case 'blue':
		$colour_type = 'Water';
		break;
	case 'pink':
		$colour_type = 'Roses';
		break;
	case 'purple':
		$colour_type = 'Royalty';
		break;
	default:
		print'<p class="error">Please selecta colour</p>';
		$okay = false;
		break;
} // End of switch
	
// If there are no errors, print a confirmation message
if ($okay) {
	print "Success! Thank you for registering.";
	print "<p>You are $age this year.</p>";
	print "<p>Your favourite colour is like $colour_type</p>";
}
?>
</body>
</html>


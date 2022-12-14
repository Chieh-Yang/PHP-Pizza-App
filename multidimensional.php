<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Chieh Yang's Multidimensional Array </title>
</head>

<body>
<h1>List of available pizza toppings:</h1>
<?php
// first array containing meat toppings
$meat = [1 => 'Pepperoni', 'Bacon', 'Ham'];

// second array containing veggie toppings
$veggie = [1 => 'Spinach', 'Onions', 'Jalapenos'];

// third array containing other toppings
$other = [1 => 'Mushrooms', 'Feta', 'Cheddar', 'Pineapple'];

// main array containing all of the toppings available
$toppings = ['MEAT' => $meat, 'VEGGIE' => $veggie, 'OTHER' => $other];

print "<p>The default meat topping is: <b>{$toppings['MEAT'][1]}</b></p>";

foreach ($toppings as $type => $value) {
	print "<p><b>$type:</b>";
		foreach ($value as $number => $top) {
				print "<br />Topping #$number is $top";
		}
		print "</p>\n";
}
?>
</body>
</html>


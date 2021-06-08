<?php
$a = array(
	'Name' => "Ruchi Chiragkumar Patel",
	'Usr_Name' => "Ruh-2212",
	'Mobile' => 7575082212,
	'Address' => "A 6 klyan nagar",
	'Task' => "Array Operations",
);
echo "<pre> Before: A ";
print_r($a);
echo "<pre> After: A ";
print_r(array_change_key_case($a,CASE_UPPER));
?>

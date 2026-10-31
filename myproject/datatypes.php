<?php


/*
Data type	Description	Example
String	Collection of characters	"Baban"
Integer	Whole number	24
Float	Decimal number	99.50
Boolean	True or False	true
Array	Stores multiple values	[10, 20, 30]
Object	Instance of a class	new Student()
NULL	No value	null
Resource	External resource reference	fopen()
*/


$name = "Baban";
$age = 24;
$salary = 25000.501;
$isDeveloper = true;

var_dump($name);
echo "<br>";

var_dump($age);
echo "<br>";

var_dump($salary);
echo number_format($salary, 1) . "<br>";

var_dump($isDeveloper);

?>





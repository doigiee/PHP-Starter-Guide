<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Joshua';   // string
$age = 28; // integer
$hasKids = false; // boolean
$height = 1.75; // float
$cat = null; // null
$car = ['hyundai', 'toyota']; // array

// concatenation
echo $name . ' is ' . $age . ' years old';

// interpolation
echo "$name is $age years old";

// get type
echo gettype($name);

// set type
$age = (string) 28;

// check variable
echo isset($name);

// constants
define('PI', 3.14);
// another example of constant
define('NAME', 'Joshua');
// another example of constant

// constant array
define('ANIMALS', ['dog', 'cat', 'bird']);

echo $name;


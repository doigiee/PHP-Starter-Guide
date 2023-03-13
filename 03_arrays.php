<?php
/* ----------- Arrrays ----------- */

// simple arrays
$people = ['Joshua', 'John', 'Jane'];
$ids = [1, 2, 3];

// var_dump($id)

$colors = [
  1=>'red',
  2=>'blue',
  3=>'green'
];

echo $colors[1];echo [1];

$hex = [
  'red'=>'#ff0000',
  'blue'=>'#0000ff',
  'green'=>'#00ff00'
];

echo $hex['blue'];

$person = [
  'name'=>'Joshua',
  'age'=>28,
  'height'=>1.75,
  'hasKids'=>false
];

echo $person['first_name'];

// Arrays within Arrays
$people = [
  [
    'name'=>'Joshua',
    'age'=>28,
    'height'=>1.75,
    'hasKids'=>false
  ],
  [
    'name'=>'John',
    'age'=>29,
    'height'=>1.75,
    'hasKids'=>false
  ],
  [
    'name'=>'Jane',
    'age'=>24,
    'height'=>1.80,
    'hasKids'=>true
  ]
];

echo $people[1]['name'];echo $people[1]['name'];

var_dump(json_encode($people));
/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

?>
<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  
  }
*/

for($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br> OR Number " . $x . "<br>";
}




/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$x = 1;

while ($x <= 15) {
  echo "The number is: $x <br>";
  $x++;
}

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

$x = 1;

do {
  echo 'Number'. $x . '<br>';
  $x++;
} while($x <= 5);


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// constantly using this one for databases or information on files, frequently and said to be the most used
$posts = ['First Post', 'Second Post', 'Third Post', 'Fourth Post']; // array

for($x = 0; $x < count($posts); $x++) {
  echo $posts[$x] . '<br>';
}

foreach($posts as $post) {
  echo $post . '<br>';
}

foreach($posts as $index => $post) {
  echo $index + 1 . ' - ' . $post . '<br>';
}

$person = [
  'name' => 'Sammy',
  'surname' => 'Carter',
  'age' => 30,
  'hobbies' => ['Tennis', 'Video Games']
];

foreach($person as $key => $value)
  echo $key . ' - ' . $value . '<br>';


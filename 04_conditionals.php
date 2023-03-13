<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
  if (raining)

}
*/
{
  // code to be executed if condition is true
  if ($rain)
  {
    echo 'It is raining';
  }
  else
  {
    echo 'It is not raining';
  }
}

$age = 18;
if($age >= 18) {
  echo 'You are old enough to get a tattoo';
} else {
  echo 'You are not old enough to get a tattoo';
}

$tdy = date("H");

if($tdy < 12) {
  echo 'Good Morning';
} elseif($tdy < 17) {
  echo 'Good Afternoon';
} else {
  echo 'Good Evening';
}

$posts = ['First Post'];

if(empty($posts)) {
  echo $posts[0];
} else {
  echo 'No posts';
}


/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

echo !empty($post) ? $posts[0] : 'No Posts';

$firstPost = !empty($posts) ? $posts[0] : 'No Posts';
$firstPost = !empty($posts) ? $posts[0] : null;
$firstPost = $posts[0] ?? null;



echo $firstPost;

/* -------- Switch Statements ------- */

$favcolor = 'red';

switch($favcolor)
{
  case 'green':
    echo 'Your favorite color is red';
    break;
  case 'blue':
    echo 'Your favorite color is blue';
    break;
  case 'green':
    echo 'Your favorite color is green';
    break;
  default:
    echo 'Your favorite color is neither red, blue, or green';
}
<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope
*/

// variables have scope, functional and global scope. 

// $email is an argument to this function
function registerUser($email) {
  echo $email . 'User Registered';
}

registerUser('Brad');

function sum($n1 = 5, $n2 = 7) {
  return $n1 + $n2;
}

// return wont print it out , though echo will print it

// sum(5, 5);

$number = sum();
echo $number;

$subtract = function($n1, $n2) {
  return $n1 - $n2;
};

echo $subtract(10, 5);

$subtract = function($n1, $n2) {
  return $n1 - $n2;
};


// Arrow Functions, shorter way of doing the same function
$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(5, 5);
/*
** Funct~ion Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

?>
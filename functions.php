<?php

// quite the same with javascript
// default value argument placed in the last argument

// argument type declaration
function sayHello(string $string)
{
  echo "Hello, $string" . PHP_EOL;
}

function sum(int $x, int $y)
{
  echo $x + $y . PHP_EOL;
}

sayHello("Galih");
sum(1, 3);

// return type declaration
function power(int $x): int
{
  return $x * $x;
}

$power2 = power(2);
echo $power2 . PHP_EOL;

// variable-length argument list
// automatically converted into an array
function sumAll(int ...$value)
{
  $total = 0;
  foreach ($value as $val) {
    $total += $val;
  }

  return $total;
}

$result = sumAll(1, 2, 3);
echo $result . PHP_EOL;


// variable function
function sumStringEvent(int $x, int $y): int
{
  return $x + $y;
}


function getStringSum(callable $callback, int $x, int $y)
{
  $summed = $callback($x, $y);

  return $summed;
}

$test = getStringSum("sumStringEvent", 2, 3);

var_dump($test);

// anonymous function
// anonymous function can't use variable outside the closure
function manipulateArray(array $array, callable $arrayManipulationFunction)
{
  $result = $arrayManipulationFunction($array);

  return $result;
}

$arrayTest = [1, 2];
$manipulateAnonFunctoin = manipulateArray($anjayTest, function ($anjayTest) {
  count($anjayTest);
});
var_dump($manipulateAnonFunctoin);


// arrow function
$manipulateArrayFunction = manipulateArray($arrayTest, fn () => count($arrayTest));
var_dump($arrayTestManipulate);

// callback function

// recursive function
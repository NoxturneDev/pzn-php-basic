<?php

// Constant it's not created on every instantiate of a class
// because a constant it's belongs to the Class
// and a property, will be created on ever instantiate of the class
// because a property belongs to the Object of the instantiate of a class
// keyword 'this' will refer to current object
// keyword 'self' will refer to the class

class Person
{
  // constant
  const AUTHOR = "Noxturne Dev";

  // property
  var $name;
  var $address;
  var $salary;

  // constructor
  function __construct(string $name, ?string $address)
  {
    $this->name = $name;
    $this->address = $address;
  }

  // method / function
  function sayHello($name)
  {
    echo "My name is $name" . PHP_EOL;
  }

  function spillAuthor()
  {
    echo "The author of this class is" .  self::AUTHOR . PHP_EOL;
  }
}
<?php
// PHP 8 #010 Variables
# They are used to keep data: numbers, texts, etc.
# We can show and change their value during the execution of the code.
# They are defined with a dollar symbol ($) and an identifier (name of the variable)
$variable;
echo "variable";
# We can define and initialize a variable with
$variable = 100;
echo "variable";

# We can change the type of of the values of a variable 
$variable = "teste";

# The variables are case sensitive 
$variable01 = "one variable";
$Variable01 = "a diferente variable";

# Wrong ways to name a variable in PHP
// $1var = 0;
// $!var = 0;
// $variable(1) = 0;
// $variable one = 0;
// $variable-one = 0;

# Ways to name a variable in PHP
$var1 = 0;
$var_one = 0;
$varOne = 0;
$_one = 0; # Not recommended
$_1 = 0; # Not recommended

# Naming conventions
$oneVariable = 0; # Camel case
$one_variable = 0; # With underscores (snake case)
$OneVariable = 0; # studly case (not recommended)

# The programer should keep the same code style all along the code.

# PHP 8 #011 Data types
# Data Types
# In PHP, variables can have different types of values.
$variable = 100;
$variable = "hundred";

# In PHP, the variables are Implicitly Typed Variables.
$integer = 100; // integer
$float = 10.5; // float with fractional part
$bool = true; // boolean (true or false)
$string = "Hello World!"; // string with char
$array = [1,2,3]; // array - collection of values
$person = new Person(); //Object with properties and methods
$empty = null; // empty variable




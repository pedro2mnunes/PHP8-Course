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

#12 Assignment operator and mathematical operators
$x = 4 + 2;  # sum
$x = 4 - 2;  # subtraction
$x = 4 * 2;  # product
$x = 4 * 2;  # division
$x = a % b;  # modulus (remainder of $a divided by $b)
$x = a ** b; # exponentiation. Result of raising $a to the power of $b.

#13  Combined Operators and Incrementing/Decrementing Operators
$a = 10;
$a += 20 # 30
$a -= 3  # 7
$a *= 2  # 2 
$a /= 2  # 5
# ++$a Pre-increment. Increments $a by one, then returns $a.
# $a++ Post-increment. Returns $a, then increments $a by one.
# --$a Pre-decrement. Decrements $a by one, then returns $a.
# $a-- Post-decrement. Returns $a, then decrementes a$ by one.

#015 Comparison operators and Spaceship operators
$a = (2 == 3);     # false
$a = (100 == 100); # true
$a = (50 == '50'); # true
$a = (50 === '50'); # false

$a = (2 != 3);    #true
$a = (50 != 50);  #false
$a = (50 != '50') #false
$a = (50 !=='50') #true

$a <=> $b 

# Comparison operators with 3 symbols , they compare value and type
# ===
# !== 

$x = 1 <=> 1; # 0 (1==1)
$x = 3 <=> 2; # 1 (3 > 2)
$x = 1 <=> 2; # -1 (1 < 2)

# 016 Logical Operators
$a and $b	# And	true if both $a and $b are true.
$a or $b	# Or	true if either $a or $b is true.
$a xor $b	# Xor	true if either $a or $b is true, but not both.
! $a	    # Not	true if $a is not true.
$a && $b	# And	true if both $a and $b are true.
$a || $b	# Or	true if either $a or $b is true.

# 017 Strings, Concatenation operator, Heredoc and Nowdoc and die() function
# Both are correct:
$a = "This is a string";
$b = "This is another string";
# Concatenation operator
$word1 = 'Hello';
$word2 = 'World';
$phrase = $word1 . ' ' . $word2; #Hello World
$phrase = "$word1 $word2"; #Hello World
# Strings with '' the variables are NOT interpreted. Single quoted strings are literal.
# Strings with "" the variables are interpreted (parse). Useful to allow escaping characters.

# Heredoc and Nowdoc are alternative way to define a string. They can be alphanumeric.
# Heredoc is obtained by defining an identifier that will mark the start and the end of a string.
echo <<<EOT
Hello World.
Goodbye!
EOT;
# Output:
# Hello World.
# Goodbye!

#Nowdoc - the variables are not evaluated
$foo = 'bar'
echo <<<'EOT'
Hello $foo.
Goodbye!
EOT;
# Output:
# Hello $foo.
# Goodbye!

























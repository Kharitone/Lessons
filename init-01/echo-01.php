<?php

/* Knowing to use output functions and commands is very important, since this is the only way for
   program to "speak", report errors or success of operations. 

   The very basic command available in PHP to achieve printing is echo.
   
   echo is a language construct, that means it is one of the PHP commands, not a functions; that's why
   it can be used out of parentheses (https://www.php.net/manual/ru/function.echo.php). It also means that
   echo returns no value, hence cannot be used in expressions (we will see it later)

   echo usage is described with the following syntax:

     echo(string $arg [,string $arg]...); 

   Consider following examples:   
*/


echo "Just a string</br>";
echo ("same, but with parentheses</br>");
echo "hello, world!</br>";    // one argument
echo "hello, ", "world!", "</br>";   // three agruments; quotes are mandatory!
echo "hello, ", "world!</br>";       // two arguments

/* More html tags... */
echo "<

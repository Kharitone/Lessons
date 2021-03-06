<?php
/* Often strings are stored in variables. To declare a variable, use
   following syntax:

   $VARIABLE_NAME=VALUE

   Note the '$' before variable name, it is mandatory!
*/

$variable="value";      # declare variable
echo "\$variable: $variable</br>";    # $variable: value
echo "$variable: $variable</br>";     # value: value
#     ^ escape it

$greeting="hello, world!";
echo "$greeting</br>";    

// or redefine it with </br> included
$greeting="hello, world!</br>";
echo "$greeting";

/* String concatenation operator: . (dot)

  You can achieve same result as above by using string concatenation
  operator "."

  Check it out:
*/
echo "hello, "."world!"."</br>";    // here all strings were concatenated, resulting in
                                    // ONE argument doesn't make much sense though..
                                    // but it does, when you use it in variables

$a=5;
$b=15;
$nl="</br>";      // note line brake in a variable now
if ( $a > $b )
  echo $a." is greater than ".$b;
else
  echo $a." is less than ".$b;

echo $nl;   # no quotes needed when </br> is in variable


# To declare variable:
$variable="value";
echo "variable: $variable".$nl;    # variable: value

$name="Monica";
$surname="Bellucci"; 

# to create one variable from the two
$full_name=$name." ".$surname.$nl;

echo ("Full name: $full_name");  # Monica Bellucci

# Example of applying suffix to the number

$number=3;    # Change numbers here to see suffix changing
if ( $number == 1 )
  $suffix = "st";
else 
if ( $number == 2 )
  $suffix = "nd";
elseif ( $number == 3 )
  $suffix = "rd";
else
  $suffix = "th";

var_dump($suffix); echo "</br>";

$number=$number.$suffix;

echo "This is $number number</br>";

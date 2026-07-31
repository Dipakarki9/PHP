<?php
$age = "20";
echo "My age is $age";

/*comment in php
single line comment(//,#)
*/
#This is a single line comment
/*
this is multiline comment
*/
#php variable
/*$x = 6;
$y = 7;
echo $x + $y;
*/

#two basic way to output data echo or print
#print "hello";

/*$color = "blue";
print "my color is $color";
*/
#php datatyped to get data type and the value of a variable ,use the var_dump() function.
$z= 10;
var_dump($z);

$fruits = "pineaple";
var_dump($fruits);

#php operators

/* 1.Arithmetic operators(+,-,%,*,/)
$x = 10;
$y = 20;
$z = $x + $y;
echo "$z";

$c = 50;
$e = 40;
$v = $c % $e;
echo"$v";
*/

/* 2.Assignment Operators(=,+=,-=,*=,/=,%=)
$x = 20;
$x += 100;
echo $x;
*/
 /* 3.Comparison Opeartors(==,===,!=,>,<,>=,<=,!==)
$x = 100;
$y = 100;
var_dump($x==$y);

$z = 1000;
$q = "1000";
var_dump($z === $q);
*/
 /* 4. Increment/decrement opeartors.(++,--)
$x = 9;
echo ++$x;

*/
 /* 5. Logical Operator(&&,||,!)
$x = 1000;
$y = 50;
if($x == 1000 && $y == 50){
    echo "hello";
}
    */

# 6. String Opeartors(.,.=)
$txt = "Hello";
$txt1 = "world";
echo $txt . $txt1;
?>

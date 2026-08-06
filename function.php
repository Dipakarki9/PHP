<?php
/*
Function syntax
function functionName ()
{
//code
}

simple example
*/
function Hello(){
    echo "Hello,its me deepa Karki";
}
// Hello();
/*
function with multiple parameter with return type.

function add($a,$b){
    return $a + $b;
}
$result = add(10,20);
echo $result;
*/
/*
function with parameter and argument

function display($name,$age){
    echo "hello $name $age";
}
display("deepa",20);
*/

/*
Call by value=>a copy of the variable is passed to the function.Any chnages made inside the function do not affect the original variable.
Example:1

function change($num){
    $num = 100;
    echo "Inside function = $num <br>";

}
$x=50;
change($x);
echo "outside function = $x";
*/
/*
Example: 2

function addNumber($a){
    $a = $a + 10;
    echo "Inside = $a <br>";
}
$x=10;
addNumber($x);
echo "Outside =$x";
*/
/*
Example :3
*/
function practice($b){
    $b=$b*2;
    echo $b."<br>";
}
$value = 25;
practice($value);
echo $value;

/*
Call by Reference(&)=> address of the original variable is passed using the & symbol.Any changes made inside the function also affect the original varibale.
function functionName ($num)
EXample:1

function change(&$num){
    $num=100;
    echo "Inside = $num <br>";
}
$x=50;
change($x);
echo "outside = $x";
*/
/*Example :2 

function addition(&$c){
    $c = $c + 5;
    echo $c."<br>";
}
$x=20;
addition($x);
echo $x;
*/


/*
PHP 3 MAIN VARIABLE
1.LOCAL=>Declared inside a function
2.GLOBAL=>Declared outside a function
3.STATIC=>

1.LOCAL variable
example

function student(){
    $name = "deepa";
    echo $name;
}

student();


Another example
function demo(){
    $a=100;
    echo $a;
}
demo();
*/

/*
2.Global variable
*/
$y= 200;
function demoo(){

}
echo $y;
demoo();

?>

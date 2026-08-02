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

 /* 6. String Opeartors(.,.=)
$txt = "Hello";
$txt1 = "world";
echo $txt . $txt1;


*/
# conditional statement
 /* if statement
 $x = 15;
if ($x >= 15){
    echo "You are teenage";
}
*/

#if else statement
 /* $color = "blue";
if($color == "red")
    {
        echo "color is blue";
    }
    else{
         echo "color is red";
    }


    $TotalMark = 100;
    if($TotalMark==100){
        echo"You scored A+";
    }
    else{
        echo"You scored B+";
    }

    */
  #if else if statement
  /*
  $t = date("H");
  if($t < "2"){
    echo"Good Morning";
  }
  elseif($t < "20"){
    echo"Good day";
  }
  else{
    echo"Have a good night!";
  }

  #Another Example
  
  $mark = 100;
  if($mark == 100){
    echo"You are briliant student";

  } elseif($mark >= 80){
    echo"You are average";

  }else{
    echo"Try Better for improvement";
  }

  */

  # Nested if else statement
/*
  $a = 20;
  if($a > 15){
    echo"nice";
   if($a > 20){
    echo "It is greater";
  }
  else{
    echo" I am here to execute code";
  }
  }

  */

  # Switch statement
  /*
  $favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}


$day = 5;
for ($day = 1; $day <= 5; $day++) {

switch ($day){
    case 1:
        echo "Today is sunday";
        break;
        case 2: 
            echo"Today is Monday";
            break;
            case 3:
                echo"Today is Tuesday";
                break;
                case 4:
                    echo"Today is wednesday";
                    break;
                    case 5:
                        echo "Today is thursaday";
                        break;
                        default:
                        echo"5 days of name";
}
}

*/

# LOOP
# For loop
/*
for($i=0; $i<=15; $i++ ){
  echo "The number is: $i <br>";
}

for ($j=0; $j<=10; $j++){
  if($j==4) break;
  echo "The number is: $j <br>";
}
  */

#While loop
/*
$i = 1;
while($i < 6){
  echo $i;
  $i++;
}

*/

#Do while loop
$i = 8;
do{
  echo $i;
  $i++;

}while($i<6);

#FOR each loop
$colors = array("red","green","blue");
foreach($colors as $value){
  echo "$value <br>";
}
?>

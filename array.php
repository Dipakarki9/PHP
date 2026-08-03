<?php
/*
 In php,there are three types of arrays:
Indexed arrays- Arrays with a numeric Indexe
Associative arrays - Arrays with named keys
Multidimesional array - Arrays containing one or more array

1.Indexed array
Example

$fruits = array("bananna","pineapple","apple",1);
#print_r($fruits);
echo $fruits[2];


Another Example
$books = array("math","Gk","Sl");
foreach ($books as $y){
    echo "$y <br>";
}
    */

# 2. Associative Arrays
# Example
/*
$student = array("name" => "Dipa", "age" =>20, "phoneno" => 983636636);
$student["age"] = 22;  to change value 
var_dump($student);

another example
$newStudent = array("name" => "Garima", "age" =>21, "phone" => 874387347);
echo $newStudent["age"];
*/
#display all array items key and values:
$student = array("name" => "Dipa", "age" =>20, "phoneno" => 983636636);
foreach ($student as $x => $y){
    echo "$x: $y <br>";
}
?>
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

#display all array items key and values:
$student = array("name" => "Dipa", "age" =>20, "phoneno" => 983636636);
foreach ($student as $x => $y){
    echo "$x: $y <br>";
}
    */
# 3.Multi-dimensional array
/*
$multidimension = [["name"=>"garima","age"=> 20,"phone"=>998887],
["name"=>"manish","age"=>21,"phone"=>9888787]];
print_r($multidimension);

*/
#Array method
# 1.is_array:
/*
$example = [1,2,3,4];
print_r(is_array($example));
*/
/*
1.array_push()
$fruit = ["apple","pine","bananna"];
array_push($fruit,"orange","mango",1);
print_r($fruit);
*/
/*
2.array_unshift()
$fruit = ["apple","pine","bananna"];
array_unshift($fruit,"coconut",2);
print_r($fruit);
*/
/* 3. array_pop()
$fruit = ["apple","pine","bananna"];
 $remove = array_pop($fruit);
 echo $remove;
print_r($fruit);

*/
/*
4.array_shift()
$fruit = ["apple","pine","bananna"];
 $remove = array_shift($fruit);
 echo $remove;
print_r($fruit);
*/
/*
5.array_flip()
$colors = [
    "a" => "red",
    "b" => "blue",
    "c" => "green"
];

$result = array_flip($colors);
print_r($result);
print_r($colors);
*/

/*
 6. array_keys()

$student = [
    "name"=> "garima",
    "age"=> 20,
    "city"=> "netachowk"
];
$result = array_keys($student);
print_r($result);

*/
/*
 7. array_merge()

$arr1 = ["red","blue"];
$arr2 = ["greeen","yellow"];
$result = array_merge($arr1,$arr2);
print_r($result);
*/
/*
 8. array_merge_recursive()
$arr1 = [
    "name"=> "garima",
    "age"=> 20
];
$arr2 = [
    "name"=> "manisha",
    "faculty"=> "CYBER SECURITY"
];
$result = array_merge_recursive($arr1,$arr2);
print_r($result);
*/
/*
9. array_rand()
$color = ["red","blue","green","pink"];
$key = array_rand($color);
print_r($key);
*/
/*
10. array_reverse()
$color = ["red","blue","brown"];
$result = array_reverse($color);
print_r($result);
*/
# 11. array_search()
$fruit = ["apple","pine","bananna"];
$key = array_search("pine",$fruit);
echo $key;
?>
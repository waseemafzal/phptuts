<?php 

/*
PHP Operators
Operators are used to perform operations on variables and values.
PHP divides the operators in the following groups:

Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators
*/

$x=1;
while ($x<=10){
	echo $x . ' Hello there how are !' . '<hr>';
	$x++;
	}
	
	
	$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);


$arr = array("name"=>'waseem', "email"=>"was@gmail.com", "phone"=>"321251211");
$arr1 = array("name"=>'waseem', "email"=>"was@gmail.com", "phone"=>"321251211");
$res=$arr+$arr1;
foreach ($res as $row) {
 print_r($row);
}

?>
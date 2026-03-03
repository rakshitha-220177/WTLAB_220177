<?php
$name="Rakshitha Induri";
echo"Hai $name\n";
$age=20;
echo "<br>\n$name's is $age is years old";
$height=4.8;
echo "<br>\n$name's height is $height ft";
$isstudent=true;
echo "<br>\n$name is student: $isstudent";
var_dump($isstudent);
echo "<br>\n";
//array datatype
$fruits=array("Mango","Apple","Banana");
echo "fruits\n";
print_r($fruits);
echo "<br>$fruits[0],$fruits[1],$fruits[2]\n";
//variables scope
//local scope
function display(){
    $city="Hyderabad";
    echo "<br>City inside function: $city\n";
}
display();
echo"<br>";
echo"$city";
//global scope
$glo_city="mumbai";
function show(){
    global $glo_city;
    echo "City inside function using global keyword: $glo_city\n";
}
show();
//static scope
function counter(){
    static $count=0;
    $count++;
    echo "<br>Counter: $count\n";
}
counter();
counter();
?>

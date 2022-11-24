<?php
/*program of arithmetic operation*/
# single line comment
/* = multi line comment
*/
$a=5;
$b=10;
echo "the sum is :";
echo $a+$b;
$c=$b-$a;
echo "<br>";
echo "the subtraction is:".$c,"<br>";
echo "the value of a:".$a."<br>"."the value of b:".$b;
echo "<br>";
echo "<br>";
/*decision statment------*/
$d=5;
if($d==6){
echo "it is equal to 5";}
else{
echo "it is not equal to 5";
}
echo "<br>";
  
$e=18;
if($e<18){
echo "it is less than 18"."<br>";}
else if($e==18){
echo "it is equal to 18"."<br>";}
else{
echo "it is greater than 18";
}
/*conditional statement*/
$var=1;
while($var<=10){
echo $var." ";
$var++;
}
echo "<br>";
$var2=1;
do{
echo $var2." ";
$var2++;
}while($var2<=15);
echo "<br>";

for($var3=1;$var3<=20;$var3++){
echo $var3." ";
}
echo "<br>";
/*constant declaration*/
define("PI",3.14);#this is a constant
echo PI."<br>";
/*--------function--------*/
function sum($one,$two){
$sub=$one+$two;
return $sub;
}
echo "the sum is :".sum(2,3)."<br>";
/*---string--------*/
$str="hello world";
echo $str."<br>";
echo strlen("Hello mumma")."<br>";
echo str_word_count("I am beautyfull girl")."<br>";
echo strrev("Hello mumma")."<br>";
echo strpos("hello world nisha","nisha")."<br>";
echo str_replace("dolly","world","hello dolly")."<br>";

/*---------array----------------*/
$car=array("volvo","BMW","Toyota");
echo "I like ".$car[0].",".$car[1].",".$car[2],"<br>";


$fruits=array("apple","mango","banana","grapes","guava");
$length=count($fruits);
echo $length."<br>";
for($i=0;$i<$length;$i++){
echo $fruits[$i]." ,";
}
echo "<br>";
$number=array(23,75,1,34);
sort($number);
$lengt=count($number);
for($i=0;$i<$lengt;$i++){
echo $number[$i]." ,";
}
echo "<br>";
$number=array(23,75,1,34);
rsort($number);
$lengt=count($number);
for($i=0;$i<$lengt;$i++){
echo $number[$i]." ,";
}
echo "<br>";
echo "<h1> some useful html tag</h1>"."<br>";
echo "<p><b><i> this is a paragraph tag</i></b></p>"."<br>";

?>
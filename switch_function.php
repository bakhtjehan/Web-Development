<?php
function calculate_grade($grades_array=array()){
	foreach ($grades_array as $grade){

switch ($grade)
{
	case 'A':
	echo "marks from 80-90" . "<br />";
	break;
	case 'B':
	echo "marks from 70-80" . "<br />";
	break;
	case 'C':
	echo "marks from 60-70" . "<br />";
	break;
	case 'D':
	echo "marks from 50-60" . "<br />";
	break;
	default:
	echo "Unkown Grade Given...";
	break;
}
}
}
$grades_array =array('A','B','C','D');
calculate_grade($grades_array);

function sum($a= null, $b= null){
	return $a + $b;

}
$sum = sum(12,13);
echo $sum;
?>

//client side scripting lang is the lang that is compile natively on client browser. (e.gphp)
//server side scripting lang which sends request to server, compile it and send back to clent e.g javascript

//implicit typecasting language: which does not need to convert from int to string e.g php
//explicit typecasting language: which need code  for conversion.

<?php
echo "Heloo World!";

//varible declaration
$var1="ABC";
//TYPECASTING IN PHP
$a="10";
var_dump($a);//show us properties of a variable
$firstName ="jahangir";//camel case
$second_name="khan";//underscore case


//dont use underscore for variable diclaration. like $_post.


echo "string";
print_r($second_name);
var_dump($second_name);

echo "<br/>";
echo $firstName. " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .$second_name;

//,#,/*  */
$a
// we use double or integer
//array= homogenous combination of data

//simple array index are numbers


$a1= array();
$a1[0]= 12;
$a2[1]=13;

//index valuse are string.
$a2['name']="mubassir";
$a2['age']="12 years";

//for boolean we use true or false



//logical operators=,==,
//<,>,=<,>=,===
//== and === are equal


$marks=50;
if ($marks >=80)
{
	echo "grade A";
}

else if ($marks < 80 && $marks>=70)
{
	echo "grade B";
}
else if ($marks<70 && $marks>=60)
{
	echo "grade C";
}
else if ($marks<60 && $marks >=50)
{
	echo "grade D";
}
else 
{
	echo"fail";
}

echo "</br>";

//switch statement
$grade ='B';
switch ($grade)
{
	case 'A':
	echo "marks from 80-90";
	break;
	case 'B':
	echo "marks from 70-80";
	break;
	case 'C':
	echo "marks from 60-70";
	break;
	case 'D':
	echo "marks from 50-60";
	break;
	default:
	echo "Unkown Grade Given...";
	break;
}


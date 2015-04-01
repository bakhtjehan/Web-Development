<?php
echo "Heloo World!";
echo "<br/>";

$a=10;

$b="How are you";
echo $a. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ". $b;


$ab['mubassir']= "hayat";
echo $ab['mubassir'];

echo "</br>";

$ac['0']="jehan";
echo $ac['0'];

echo "</br>";
echo "</br>";
echo "</br>";


$shakir=80;
if ($shakir>=80)
{
	echo "Your grade is A";
}
else if ($shakir < 80 && $shakir>=70)
{
	echo "grade B";
}
else if ($shakir<70 && $shakir>=60)
{
	echo "your grade is C";
}
else if ($shakir<60 && $shakir>=60)
{
	echo "your grade is D";
}
else
{
	echo "your are fail";
}


//swith statement

echo "</br>";

$grade='B';
switch($grade)
{
	case 'A':
	echo 'Your marks are between 80-90';
	break;
	case 'B':
	echo "your marks are between 70-80";
	break;
	case 'C':
	echo "your marks are between 60-70";
	break;
	case 'D':
	echo "your marks are between 50-60";
	break;

}





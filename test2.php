<?php
$a1= array(45,94,81,41,82,11);

$length=count($a1); //for counting lenght of array

for ($i=0;$i<$length; $i++)
{
if ($a1[$i]<=100 && $a1[$i]>= 80){
	echo  "<br />" . "Your Grade is A";
	echo "<br />";
}
else if ($a1[$i] < 80 && $a1[$i]>=70){
	echo "Your Grade is B";
	echo "<br />";
}
else if ($a1[$i] < 70 && $a1[$i]>=60){
	echo "Your Grade is B";
	echo "<br />";
}
else if ($a1[$i] < 60 && $a1[$i]>=50){
	echo "Your Grade is C";
	echo "<br />";
}
else if ($a1[$i] < 50 && $a1[$i]>=40){
	echo "Your Grade is D";
	echo "<br />";
}
else {
	echo "Your are fail";
}
}

//control shift+p and then writting rein it will manage the code.

echo "<br />";
	echo "while loop";
	$i = 11;
while($i <=10){
	echo  $i . "<br />\n";
	$i++;
}

?>
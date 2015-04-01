<?php

$array=array (78,35,45,76,50,89,35);
foreach ($array as $marks)
{
if ($marks>= 80 && $marks <=100){
	echo "Your Grade is A";
	echo "<br />";
}
else if ($marks >=70 && $marks<80){
	echo "Your Grade is B";
	echo "<br />";
}
else if ($marks>=60 && $marks<70){
	echo "Your Grade is C" . "<br />";
}
else if ($marks >=50 && $marks <60){
	echo "Your grade is C" ."<br />";
}
else if ($marks >=40 && $marks<50){
	echo   "Your marks are:" . "<strong>$marks</strong>" . 
	"&nbsp;&nbsp;&nbsp;&nbsp;" .  "And " . "<br />"."Your Grade is: <strong>D</strong>" . "<br />";
}
else {
	echo "you are fail" . "<br />";
}
}
?>
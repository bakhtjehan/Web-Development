<?php
function calculate_grade($marks_array=array()){
	foreach ($marks_array as $marks)
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
}
$marks_array = array(78,34,98,78,90);
calculate_grade($marks_array);
?>


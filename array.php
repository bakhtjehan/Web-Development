<?php
$a1 = array();
	$a1[0] = 45;
	$a1[1] = 94;
	$a1[2] = 81;
	$a1[3] = 41;
	$a1[4] = 82;
$length = count($a1);        //For counting the length of array
	for($i=0; $i<$length; $i++){
		if($a1[$i] > 80){
echo $a1[$i] . "makes grade of A <br />"; 
		} else if ($a1[$i] > 70){
			echo $a1[$i] . "makes grade of B <br />"; 
		} else if ($a1[$i] > 60){
			echo $a1[$i] . "makes grade of C <br />"; 
		} else if ($a1[$i] > 50){
			echo $a1[$i] . "makes grade of D <br />"; 
		} else {
			echo $a1[$i] . "makes grade of F <br />"; 
		}
	}

?>


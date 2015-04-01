<?php

function arrayD()
{
	$a1=array(12,45,67,89,67,46);
	$length=count($a1);
	for ($i=0;$i<$length;$i++)
		if($a1[$i] <=100 && $a1[$i] >=80 ){
			echo "marks you get is ";
			echo $a1[$i] . "&nbsp&nbsp&nbsp&nbsp" . "And" . " &nbsp&nbsp" ."Your grade is A";
			echo "<br />";
		}
		else if ($a1[$i] < 80 && $a1[$i]){
			echo "marks you get is ";
			echo $a1[$i] . "&nbsp&nbsp&nbsp&nbsp" . "And" . " &nbsp&nbsp" ."Your grade is B";
			echo "<br />";
		}
		else
		{
			echo "Your are fail";
			echo "<br />";
		}
	}
	arrayD();



//
	echo "for loap";
	echo "<br />";
	$s= array ("BMW","NISSAN","HONDA","TOYOTA");
	$length=count($s);
	for($x=0;$x<$length;$x++)
	{

		echo $s[$x];
		echo "<br />";
	}
	echo "<br />";
	echo "for each";
	echo "<br />";
	$s= array ("BMW","NISSAN","HONDA","TOYOTA");
	$length=count($s);
	foreach($s as $y)
	{
		echo $y;
		echo "<br />";
	}

	echo "<br />";
	echo "while loop";
	$i = 0;
while($i <=10){
	echo  $i . "<br />\n";
	$i++;
}

?>	
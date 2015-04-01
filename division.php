<?php
function div($a =NULL , $b= NULL){
return $a / $b;

}
$a = 2089;
$b = 99;
$div =  div($a,$b); 
echo "{$a} Devided by" ."&nbsp;" . $b . "=" . $div;



echo "<br />";

function mul($a= NULL, $b= NULL){
	return $a * $b;
}
$multiply = mul(50,10);
echo  "50 multiply by" ."&nbsp;" . "10" . "=" . $multiply;



?>
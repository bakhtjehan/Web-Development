<?php
$a1=array (
      array ("company"=>"Honda", "Car"=> "Civic", "Engine"=> "Wti"),
      array ("company"=>"suzauki","Car"=>"Alto", "Engine"=>"Bugati")
      );

$length=count($a1);
$i=0;
while($i<$length){
if($a1[$i]["company"] == "Honda" || $a1[$i]["Car"] == "Alto"){
	echo $a1[$i]["company"] . "&nbsp;". "is" . "&nbsp;" .$a1[$i]["Car"] .
	 "&nbsp;" . "Car  which have Engine" . "&nbsp;" . $a1[$i]["Engine"] .  
	"<br />";
}
$i++;
}

?>
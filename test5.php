<?php
function redirect_to($location= NULL){
//Function to redirect to other pages
	if ($location != NULL){
		header("Locaion: {$location}");
		exit;
	}

}
//function called which is upper declared
redirect_to("http://www.google.com.pk");




function array($accept="bakht_jehan")
{
echo $accept;
}
array();
?>
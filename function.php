<?php
// Functions
//bakht jehan shakir jowar buner
//bakht jehan shakir jowar buner
//bakht jehan shakir jowar buner//with control press in front of line to replacce and write something 


//function is a line of code which perform a specific function
//two types
//predefined: 
//user defined:


//function function_name(argument)
//{
	#code
   #return // argument and return type may be or not
//}

//function declaration
function redirect_to($location= NULL){
//Function to redirect to other pages
	if ($location != NULL){
		header("Locaion: {$location}");
		exit;
	}

}
//function called which is upper declared
redirect_to("http://www.google.com.pk");


?>
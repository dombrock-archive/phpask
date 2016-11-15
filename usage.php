<?php
require("ask.php");
//usage
//ask a yes or no question
$yn = yesno("Yes or No? ");//returns a bool
//process the input
if($yn == true){
	echo "You answered yes. \n";
}
else{
	echo "You answered no. \n";
}
//ask a basic question
echo ask("Input: ")." \n";
//ask a basic question and assign it to a vaiable
$color = ask("What is your favorite color? \n");
echo "My favorite color is also $color! \n";
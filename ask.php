<?php

function ask($que){
	echo $que;
	return fgets(STDIN);
}

function yesno($que){
	echo $que;
	$input = substr(strtolower(fgets(STDIN)),0,1);
	switch ($input){
		case "y":
			return true;
			break;
		case "n":
			return false;
			break;
		default:
			echo "Please answer 'yes' or 'no'. \n";
			yesno($que);
	}
}

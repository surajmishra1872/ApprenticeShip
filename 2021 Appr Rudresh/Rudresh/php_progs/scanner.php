<?php
#scanner file for reading command line input
function input($msg){
	$buffersize=1024;
	//echo $msg,"\n";
	echo $msg;
	$input=fgets(STDIN,$buffersize);
	return trim($input);
}
?>
<?php
//wap in php to show $GLOBALS
//Example -3
$a = 10;//local variable

echo "The Local Variable ={$a}<br>";//local scope

function test(){
	global $a;
	echo "The value of gloabal a= {$a}<br>";
	$b=20;//local $b
	echo "The value of local b = {$b}<br>";
}
//calling test
test();
echo $a;//global to the function local to the script
echo "The value of b inside function = {$b}"//out of scope

?>
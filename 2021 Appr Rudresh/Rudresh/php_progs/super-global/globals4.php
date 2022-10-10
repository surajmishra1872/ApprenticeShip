<?php
//wap in php to show $GLOBALS
//Example -4

function test(){
	$b=20;//local $b
	$GLOBALS['b'] = $b;
	echo "The value of local b inside function = {$b}<hr>";
}
//calling test
test();
print_r($GLOBALS);
echo "<hr>The value of b outside function = {$b}"
?>
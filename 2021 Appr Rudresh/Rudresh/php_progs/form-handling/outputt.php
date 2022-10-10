<?php
//for request get / post
switch($_SERVER['REQUEST_METHOD'])

{
	case 'POST':
	display_name($_POST);
	//echo 'valid Request';
	break;

	default:
	//echo "Bewakoof aadmi btn click kr";.
	header("location:input.html");
	break;
}

//function definition
function display_name($data){
	$name = $data['name'];
echo "Hello Mr. {$name}";
}
?>
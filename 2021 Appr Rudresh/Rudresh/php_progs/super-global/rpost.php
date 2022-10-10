<?php
echo "The request is ",$_SERVER['REQUEST_METHOD'],"<br>";
echo "The QUERy String ",$_SERVER['QUERY_STRING'],"<br>";
echo "The count of key = ",count($_POST);
echo '<br>The $_POST keys ';
print_r($_POST);
echo "<br>";
echo 'The $_REQUEST keys ';

print_r($_REQUEST);
// $name = $_REQUEST['name'];
// echo $name;
?>
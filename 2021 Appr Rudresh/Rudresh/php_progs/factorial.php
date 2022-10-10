<?php
include'scanner.php';
$n =input("Enter a Number");
$fact=1;
for($i=1;$i<=$n;$i++){
$fact =$fact*$i;
}
echo $fact;
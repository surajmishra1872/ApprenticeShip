<?php
include'scanner.php';
$x =input("Enter First Number");
$y =input("Enter Second Number");
$res =(($x*$x)-($y*$y))/($x-$y);
echo "the sum is without = ",$res;
?>
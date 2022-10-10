<?php
#wap in php to find sum and average using command line argument
//print_r(sizeof($argv));
//print_r($argv);
$sum=0;
for($i=1;$i<($argv);$i++)
{
echo "{$argv[$i]}";
$sum=$sum+$argv[$i];
}
echo "The sum is {$sum}\n";
$avg = $sum/(($argv)-1);
echo "The Average is = {$avg}";
?>
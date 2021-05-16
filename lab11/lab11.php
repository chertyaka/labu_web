<?php

$h=$_GET['h'];
$k=$_GET['k'];
$c=$_GET['c'];
$t = $h*((sin($h) * sin($h)) + $c * (cos($k) * cos($k)));
$z = ($h * log(pow($h,$k) + $c) + 3); 

echo "$t, $z";


?>
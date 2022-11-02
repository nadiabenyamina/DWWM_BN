<?php

$A = 3;
$B = 10;
$C = $A + $B;
$B = $A + $B;
$A = $C;

echo "La variable A vaut : " . $A . "\n";
echo "La variable B vaut : " . $B . "\n";
echo "La variable C vaut : " . $C . "\n";

?>
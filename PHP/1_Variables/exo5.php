<?php

$A = 1;
$B = 2;
$C = 3;
$Z = $B;
$B = $A;
$A = $C;
$C = $Z;

echo "La variable A vaut : " . $A . "\n";
echo "La variable B vaut : " . $B . "\n";
echo "La variable C vaut : " . $C;

?>
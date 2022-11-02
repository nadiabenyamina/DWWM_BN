<?php

$X = 54;
$Y = 102;
$Z = $Y;
$Y = $X;
$X = $Z;

echo "La variable X vaut : " . $X . "\n";
echo "La variable Y vaut : " . $Y . "\n";

?>
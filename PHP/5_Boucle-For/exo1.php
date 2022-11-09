<?php

$table = rand(1, 9);

for ($i=1; $i<=10; $i++) {
    echo $i . "x $table = " . $i * $table . "\n";
}

?>
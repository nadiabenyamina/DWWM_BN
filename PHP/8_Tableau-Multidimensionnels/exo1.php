<?php

$tableauT = [36, 35, 1, 81, 7, 55, 91, 62, 9, 71, 40, 74];
    [2, 84, 65, 100, 63, 78, 76, 8, 99, 41, 80, 69];
    [18, 94, 92, 61, 46, 59, 98, 38, 45, 25, 33, 49];
    [11, 88, 56, 54, 64, 34, 23, 3, 37, 60, 31, 85];
    [15, 16, 43, 22, 73, 28, 51, 75, 47, 5, 93, 27];
    [57, 90, 82, 29, 19, 66, 17, 48, 14, 13, 70, 52];
    [77, 39, 20, 83, 44, 42, 95, 12, 79, 97, 68, 67];
    [32, 4, 58, 87, 26, 96, 72, 21, 89, 86, 50, 24];

for ($i=0; $i<=12; $i++) {
    for ($j=0; $j<=8; $j++) {
        echo $tableauT[$i][$j];
    }
    echo "\n";
}

?>
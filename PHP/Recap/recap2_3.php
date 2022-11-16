<?php

$nombre =readline("entrez un nombre:");
for( $i=0; $i<=($nombre); $i++ ){
    for( $j=0; $j<=$nombre; $j++ ){
        if($i>=$nombre-($j-1)){
            echo $i;
        }
    }
    echo "\n";
}

?>
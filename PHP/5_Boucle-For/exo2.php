<?php

$n = readline("Entrez un nombre : ");
$pos = $n;

for ($i=1; $i<=5; $i++) {
    echo "Les 5 nombres précédents sont : " . $n-- . "\n";
}

echo "*****************************" . "\n";

for ($i=1; $i<=5; $i++) {
    echo "Les 5 nombres suivants sont : " . $pos++ . "\n";
}

?>
<?php
$garde="";
$tab=[];
$z=5;
for ($i=0;$i<13;$i++){
    if ($i<=6){
        $garde=$garde."*";
        $tab[$i]=$garde;
    }
    else{
        $tab[$i]=$tab[$z];
        $z--;
    }
}
for($i=0;$i<13;$i++){
    echo($tab[$i]."\n");
}
?>
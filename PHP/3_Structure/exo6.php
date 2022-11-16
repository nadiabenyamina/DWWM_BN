<?php
$h = readline("Donner une heure : ");
$m = readline("Donner une minute : ");
$m= $m+1;

if ($m >=60){
    $h=$h+1;
    $m=$m-60;
    if ($h >=24){
        $h=$h-24;
    }
}
else{
    if ($h >=24){
        $h=$h-24;
    }
}



echo("Dans une minute, il sera ".$h." heure(s) ".$m)
?>
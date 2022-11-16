<?php
$h = readline("Donner une heure : ");
$m = readline("Donner une minute : ");
$s =readline("Donnez une seconde : ");
$s= $s+1;


if ($s>=60){
    $s=0;
    $m=$m+1;

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
}
else{
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
}
echo("Dans une minute, il sera ".$h." heure(s) ".$m."minute(s) ".$s." seconde(s)")
?>
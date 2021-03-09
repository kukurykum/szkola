\\<?php
function zadanie1($arg1, $arg2, $arg3){
    return max($arg1, $arg2, $arg3);
}

function zadanie2($arg1, $arg2){
    return pow($arg1, $arg2);
}

function zadanie3($base, $height){
    return ($base * $height) / 2;
}

function zadanie4_1($tab){
    for ($x = sizeof($tab); $x > 0; $x--){
        $tab[$x-1] = rand();
    }
    return $tab;
}

function zadanie4_2($tab, $min, $max){
    for ($x = sizeof($tab); $x > 0; $x--){
        $tab[$x-1] = rand($min, $max);
    }
    return $tab;
}

function zadanie_4_3($tab){
    for ($x = sizeof($tab); $x > 0; $x--){
        echo $tab[$x-1]."<br>";
    }
}

function zadanie_4_4($tab){
    $sum = 0;
    for ($x = sizeof($tab); $x > 0; $x--){
        $sum += $tab[$x-1];
    }
    return $sum;
}

function zadanie_4_5($tab){
    $newtab[0] = 0;
    $y = 0;
    for ($x = sizeof($tab); $x > 0; $x--){
        $newtab[$y] = $tab[$x-1];
        $y++;
    }
    return $newtab;
}

function zadanie_4_6($tab){
    for ($x = sizeof($tab); $x > 0; $x--){
        $tab[$x-1] = $tab[$x-1] * -1;
    }
    return $tab;
}

function zadanie_4_7($tab, $a){
    $count = 0;
    for ($x = sizeof($tab); $x > 0; $x--){
        if($tab[$x-1] == $a){
            $count ++;
        }
    }
    return $count;
}

function zadanie_4_8($tab, $a){
    for ($x = sizeof($tab); $x > 0; $x--){
        $tab[$x-1] = $tab[$x-1] * $a;
    }
    return $tab;
}

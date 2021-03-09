<?php
    function z1($a, $b, $c){
        $max = $a;
        if($b > $max) $max = $b;
        if($c > $max) $max = $c;
        echo "wartosc max: $max <br>";
    }

    function z2($x, $y){
        $suma = $x;
        for($i=1; $i < $y; $i++) $suma *= $x;
        echo "$x do potęgi $y wynosi $suma<br>";
    }

    function z3($a, $h){
        $pole = ($a * $h) / 2;
        echo "pole trojkata wynosi $pole<br>";
    }

    function generuj($tab){
        for($i=0; $i < 10; $i++) $tab[$i] = rand(10,99);
        return $tab;
    }

    function generuj_w_przedziale($a, $b, $tab){
        for($i=0; $i < 10; $i++) $tab[$i] = rand($a, $b);
        return $tab;  
    }

    function wyswietl($tab){
        for($i=0; $i < 10; $i++) {
            echo $tab[$i]; echo "<br>";
        }
        return $tab;
    }

    function suma($tab){
        $suma = 0;
        for($i=0; $i < 10; $i++) $suma += $tab[i];
        echo $suma;
    }

    function odwroc($tab){
        for($i=10; $i > 0; $i--){
            echo $tab[$i]; echo "<br>";
        }
        return $tab;
    }

    function przeciwna($tab){
        for($i=0; $i < 10; $i++){
            $tab[$i] *= -1;
        }
        return $tab;
    }

    function sprawdz($a, $tab){
        $licznik = 0;
        for($i=0; $i < 10; $i++)
            if ($tab[$i] == $a) $licznik++;
        echo $licznik;
    }

    function razy_liczba($a, $tab){
        for($i=0; $i < 10; $i++)
            $tab[$i] *= $a;
        return $tab;
    }

    z1(1,2,3);
    z2(2,3);
    z3(5,4);
    generuj($tab);
    generuj_w_przedziale(1,9,$tab);
    wyswietl($tab);
    odwroc($tab);
    przeciwna($tab);
    sprawdz(5,$tab);
    razy_liczba(5,$tab);
?>
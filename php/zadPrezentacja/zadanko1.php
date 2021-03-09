<?php
    function z1($a, $b){
        for ($a+=1; $a < $b; $a++)
            echo "$a ";
        echo "<br>";
    }
    function z2($a, $b){
        for ($b-=1; $b > $a; $b--)
            echo "$b ";
        echo "<br>";
    }
    function z3(){
        for ($a = 0; $a < 100; $a++){
            if ($a % 2 == 0)
                echo "1 ";
            else
                echo "0 ";
        }
        echo "<br>";
    }
    function z4($a, $b){
        $suma = 0;
        for ($a; $a <= $b; $a++)
            $suma += $a;    
        echo "suma to $suma <br>";
    }
    function z5($a, $b){
        $suma = 0;
        for ($a; $a <= $b; $a++)
            if ($a % 2 == 0)
                $suma += $a;
        echo "suma liczb podzielnych przez 2 to $suma <br>";
    }
    function z6($a, $b){
        $suma = 0;
        if ($a > $b){
            for ($b; $b <= $a; $b++)
                $suma += $b;    
            echo "suma to $suma <br>";
        }
        else {
            for ($a; $a <= $b; $a++)
                $suma += $a;    
            echo "suma to $suma <br>";
        }
    }
    function z7($a, $b){
        if ($a < 0)
            $a *= -1;
        if ($a > $b)
            echo "najwieksza liczba to $a b= $b : ";
        else
            echo "najwieksza liczba to $b : ";
        for ($b; $b >= $a; $b--)
            echo "$b ";
        echo "<br>";
    }
    function z8(){
        for ($b=1; $b <= 10; $b++){
            if($b <=5){
                for($a=1; $a <= 10; $a++)
                    if ($a <= 5) echo "1 ";
                    else echo "0 ";
            }
            else
                for($a=1; $a <= 10; $a++)
                    if ($a <= 5) echo "0 ";
                    else echo "1 ";
            echo "<br>";
        }
    }
    //   6. Niech tablica 10 elementowa trzyma informacje o tym ile ktoś wypił szklanek wody. 
    //   Napisz funkcję, która sprawdzi czy w tej tablicy jest już tyle szklanek, 
    //   że człowiek ten wypił dzienną dawkę wynoszącą przynajmniej 2 litry. Jedna szklanka to 250 mililitrów.
    
    function zadanie6(){
        $licznik = 0;
        for ($i = 0; $i < 10; $i++){
            if ($i < 8)
                $tab[$i] = 1; // zapisujemy 8 jedynek (1 = 1 szklanka)
            else
                $tab[$i] = 0; // (0 = brak szklanki)
        }
        for ($i = 0; $i < 10; i++){
            if ($tab[$i] == 1){
                $licznik++;
            } 
        }
        if ($licznik >= 8)
            echo "wypiles dzisiaj wystarczajaco wody";
        else
            echo "wypies za malo wody";
    }

    //   1. Napisz funkcję, która policzy wynik działania dowolnej funkcji liniowej, kwadratowej lub wielomianu 3 stopnia.
    //   Użytkownik podaje na wejście argumenty a-b-c-d, jeśli c i d są równe 0 tzn że jest to zwykła funkcja liniowa, gdy d=0 to mamy kwadratową.


    function zadanie1($a, $b, $c, $d, $x){ // dodany jest $x zeby wiadomo dla jakiego x ma byc obliczane
        if ($a > 0 && $b > 0 && $c == 0 && $d == 0){
            // y = ax + b;
            $y = $a * $x + $b;
            echo "wartosc fucnkji liniowej dla x = $x wynosi: $y";
        }
        else if ($a > 0 && $b > 0 && $c > 0 && $d == 0){
            // y = ax^2 +bx + c
            $y = $a * ($x * $x) + $b * 1 + $c;
            echo "wartosc fucnkji kwadratowej dla x = $x wynosi: $y";
        }
        else if ($a > 0 && $b > 0 && $c > 0 && $d > 0){
            // y = ax^3 + bx^2 + cx + d
            $y = $a * ($x * $x * $x) + $b *($x * $x) + $c * $x + $d;
            echo "wartosc trójmianu 3 stopnia dla x = $x wynosi: $y";
        }
    }


    function zadanie3($rok, $rocznik){
        $wiek = $rok - $rocznik  echo("twoj wiek to:" $wiek)
        Podaj rok: <input type='text' name='rok'>
        Podaj druga rocznik: <input type='text' name='rocznik'>
        echo("twój wiek to: $wiek");
    }




    zadanie3(2020, 2002);    
    z1(5,13);
    z2(5,13);
    z3();
    z4(2,6);
    z5(2,10);
    z6(10,2);
    z7(-5,20);
    z8();
?>
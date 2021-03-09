<?php
    
    echo "1. Stwórz tablicę 10x10 losowych elementów wartościami od 0 do 100";
    for($a=0; $a < 10; $a++){
        for($b=0; $b < 10; $b++)
            $tablica[$a][$b] = rand(0, 100);
    }
    for($a=0; $a < 10; $a++){
        echo "<br>";
        for($b=0; $b < 10; $b++){
            echo $tablica[$a][$b];
            echo " |  ";
        }
    }
    echo "<br><br>2. Policz dwie sumy na podstawie przekątnych";
    $c = 0;
    $suma1 = 0;
    for($a=0; $a < 10; $a++){
        for($b=0; $b < 10; $b++){
            if($a == $c && $b == $c){
                $suma1 += $tablica[$c][$c];
                //$tablica[$c][$c] = 0; <-zerowanie po przekatnej
                $c++;
            }
        }
    }
    $d = 9;
    $c = 0;
    $suma2 = 0;
    for($a=0; $a < 10; $a++){
        for($b=0; $b < 10; $b++){
            if($a == $c && $b == $d){
                $suma2 += $tablica[$c][$d];
                //$tablica[$c][$d] = 0; <-zerowanie po przekarnej
                $c++; $d--;
            }
        }
    }
    for($a=0; $a < 10; $a++){
        echo "<br>";
        for($b=0; $b < 10; $b++){
            echo $tablica[$a][$b];
            echo "  |  ";
        }
    }
    echo "<br>suma po przekatnej nr1: $suma1<br>";
    echo "suma po przekatnej nr2: $suma2<br>";

    echo "<br>3. Policz średnią wartość wszystkich elementów tablicy<br>";
    $suma = 0;
    for($a=0; $a < 10; $a++){
        for($b=0; $b < 10; $b++)
            $suma += $tablica[$a][$b];
    }
    echo $suma / 100; echo "<br>";

    echo "<br>4. Wszędzie, gdzie jest wartość większa od 10 wyzeruj dane.";
    for($a=0; $a < 10; $a++){
        for($b=0; $b < 10; $b++)
            if($tablica[$a][$b] > 10)
                $tablica[$a][$b] = 0;
    }
    for($a=0; $a < 10; $a++){
        echo "<br>";
        for($b=0; $b < 10; $b++){
            echo $tablica[$a][$b];
            echo "  |  ";
        }
    }
    //===========================================================
    //generuje nowe liczby do tablicy by wyniki byly ciekawsze :)
    //tym razem niech beda od 1 do 9
    for($a=0; $a < 10; $a++){
        for($b=0; $b < 10; $b++)
            $tablica[$a][$b] = rand(1, 9);
    }
    echo "<br><br>* nowo wygenerowana tablica *";
    for($a=0; $a < 10; $a++){
        echo "<br>";
        for($b=0; $b < 10; $b++){
            echo $tablica[$a][$b];
            echo " |  ";
        }
    }
    //rowniez wypisuje nowo wygenerowane liczby
    //===========================================================
    echo "<br><br>5. Wszędzie, gdzie jest liczba parzysta przemnóż ją przez 2, natomiast nieparzystą przez 3.";
    for($a=0; $a < 10; $a++){
        for($b=0; $b < 10; $b++)
            if($tablica[$a][$b] % 2 == 0)
                $tablica[$a][$b] *= 2;
            else
                $tablica[$a][$b] *= 3;
    }
    for($a=0; $a < 10; $a++){
        echo "<br>";
        for($b=0; $b < 10; $b++){
            echo $tablica[$a][$b];
            echo "  |  ";
        }
    }

    echo "<br><br>6. Policz sumę elementów w ostatnim wierszu. ";  
    $suma = 0;
    for($a=0; $a < 10; $a++){
        for($b=0; $b < 10; $b++){
                $suma += $tablica[9][$b];
                //$tablica[9][$b] = 0; // zerowanie ostatniego wiersza
        }
    }
    for($a=0; $a < 10; $a++){
        echo "<br>";
        for($b=0; $b < 10; $b++){
            echo $tablica[$a][$b];
            echo "  |  ";
        }
    }
    $suma /= 10;
    echo "<br>suma elementow z ostatniego wiersza $suma <br>";

    echo "<br>7. Policz sumę elementów w ostatniej kolumnie. ";
    $suma = 0;

    for($a=0; $a < 10; $a++){
        for($b=0; $b < 10; $b++){
             //$suma += $tablica[$a][9];
             //$tablica[$a][9] = 0;    
        }
        $suma += $tablica[$a][9];
    }
    for($a=0; $a < 10; $a++){
        echo "<br>";
        for($b=0; $b < 10; $b++){
            echo $tablica[$a][$b];
            echo "  |  ";
        }
    }
    echo "<br>suma elementow z ostatniej kolumny $suma <br>";





    echo "<br>8. Wygeneruj drugą tablicę będącą tabliczką mnożenia.";
    for($a=0; $a < 10; $a++){
        for($b=0; $b < 10; $b++)
            $tablica1[$a][$b] = $a*$b;
    }
    for($a=0; $a < 10; $a++){
        echo "<br>";
        for($b=0; $b < 10; $b++){
            echo $tablica1[$a][$b];
            echo " |  ";
        }
    }

    echo "<br><br>9. Dodaj dwie tablice do siebie tworząc trzecią";
    for($a=0; $a < 10; $a++){
        for($b=0; $b < 10; $b++)
            $tablica2[$a][$b] = $tablica[$a][$b] + $tablica1[$a][$b];
    }
    for($a=0; $a < 10; $a++){
        echo "<br>";
        for($b=0; $b < 10; $b++){
            echo $tablica2[$a][$b];
            echo " |  ";
        }
    }
    
    
    echo "<br><br>10. Zamień wiersze tablicy tak, aby stały się kolumnami innej tablicy.";
    for($a=0; $a < 10; $a++){
        for($b=0; $b < 10; $b++)
            $tablica3[$a][$b] = $tablica2[$b][$a];
    }
    for($a=0; $a < 10; $a++){
        echo "<br>";
        for($b=0; $b < 10; $b++){
            echo $tablica3[$a][$b];
            echo " |  ";
        }
    }

    echo "<br><br>11. Dla nowej tablicy policz sumę elementów parzystych i iloczyn nieparzystych.  <br>";
    $iloczynP = 1;
    $iloczynN = 1;
    for($a=0; $a < 10; $a++){
        for($b=0; $b < 10; $b++){
            if($tablica3[$a][$b] % 2 == 0){
                //echo " parzyste "; echo $tablica3[$a][$b]; echo "<br>";
                $iloczynP *= $tablica3[$a][$b];
            }
            else {
                //echo " nieparzyste "; echo $tablica3[$a][$b]; echo "<br>";
                $iloczynN *= $tablica3[$a][$b]; 
            }
        }
    }
    echo "iloczyn parzystych: $iloczynP<br>";
    echo "iloczyn nieaprzystych: $iloczynN<br>";
    
    echo "<br>12. Stwórz nową tablicę 10x3, gdzie w pierwszej kolumnie pojawi się wartość losowa, w drugiej jej kwadrat, a w trzeciej sześcian.";
    for($a=0; $a < 10; $a++){
        for($b=0; $b < 10; $b++)
            $tablica4[$a][$b] = 0;
    }
    for($a=0; $a < 10; $a++){
        for($b=0; $b < 3; $b++)
            $tablica4[$a][0] = rand(1,9);
            $tablica4[$a][1] = $tablica4[$a][0] * $tablica4[$a][0];
            $tablica4[$a][2] = $tablica4[$a][0] * $tablica4[$a][0] * $tablica4[$a][0];
    }
    for($a=0; $a < 10; $a++){
        echo "<br>";
        for($b=0; $b < 3; $b++){
            echo $tablica4[$a][$b];
            echo " |  ";
        }
    }


    function zadanie3($rok, $rocznik){
        $wiek = $rok - $rocznik;  
        echo "<br><br>twoj wiek to: $wiek"; 
    }
    
    

 
    zadanie3(2020, 2002);


?>
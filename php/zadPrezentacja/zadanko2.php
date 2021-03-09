<?php
    echo "Zainicjuj tablicę 10 elementową zmiennymi losowymi.<br>";
    for ($a=0; $a < 10; $a++){
        $tablica[$a] = rand(1,50); //dalem zakres 1-50 zeby w jednym z zadan znalazlo jakies wartosci
        echo "$tablica[$a]<br>";  
    }

    echo "<br>Wyzeruj co drugą daną.<br>";
    for ($a=0; $a < 10; $a++){
        if ($a % 2 != 0)
            $tablica[$a] = 0;
        echo "$tablica[$a]<br>";
    }

    echo "<br>Policz sumę wszytskich elementów.<br>";
    $suma = 0;
    for ($a=0; $a < 10; $a++){
        $suma += $tablica[$a];
    }
    echo "suma: $suma <br>";

    echo "<br>Policz iloczyn wszystkich elementów uważając na zera, te omiń.<br>";
    $iloczyn = 1;
    for ($a=0; $a < 10; $a+=2){
        $iloczyn *= $tablica[$a]; 
    }
    echo "iloczyn bez 0: $iloczyn<br>";

    echo "<br>Wypisz wszystkie wartości z zakresu (5-10).<br>";
    for ($a=0; $a < 10; $a+=2){
        if ($tablica[$a] >= 5 && $tablica[$a] <= 10)
            echo "$tablica[$a]<br>";
    }

    echo "<br>Znajdź element największy i najmniejszy.<br>";
    $max = $tablica[0];
    for ($a=0; $a < 10; $a++){
        if ($tablica[$a] > $max) $max = $tablica[$a];
    }
    echo "max: $max <br>";

    echo "<br>Przepisz tablicę do drugiej tablicy odwracając zawartość.<br>";
    for ($a=0; $a < 10; $a++)
        $tablica1[10-$a] = $tablica[$a];
    for ($a=1; $a <= 10; $a++)
        echo "$tablica1[$a]<br>";
    
    echo "<br>Zapisz do tablicy naprzemiennie wartości 0 i 1 z użyciem pętli.<br>";
    for ($a=0; $a < 10; $a++){
        if ($a % 2 == 0)
            $tablica[$a] = 0;
        else
            $tablica[$a] = 1;
        echo "$tablica[$a]<br>";
    }


?>
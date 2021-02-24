<?php
    function prezentacja($arg1,$arg2){
        // funkcja posiada 1 instrukcje
        echo "Arkadiusz Waliczek ".$arg1." - ".$arg2;
    }
    prezentacja("Programuje","w PHP<br>");
    prezentacja("Programuje","w AJAX<br>");
    prezentacja("Programuje","w React Native<br>");

    function dodawanie($liczba1,$liczba2){
        echo $liczba1 * $liczba2;
    }
    dodawanie(1,2);
    echo "<br>";
    dodawanie(10,23);
    echo "<br>";
    function opis(){
        return "Aruś Waliczkowski"; 
    }
    echo opis();
    echo ("<br>");
    /**
     * Zwracanie wartości przez funkcje
     */
    $liczba1 = 10; 
    function zwiekszanie($liczba1){
        //to jest kopia, czyli inna nowa zmienna w pamięci RAM
        $liczba1++;
        return $liczba1;
    }

    echo zwiekszanie($liczba1);
    echo "<br>";
    echo $liczba1;


    $liczba2 = 10; 
    function zwiekszanie2(&$liczba2){
        //pracujemy na zmiennej referencyjnej czyli na oryginale
        $liczba2++;
        return $liczba2;
    }

    echo zwiekszanie2($liczba2);
    echo "<br>";
    echo $liczba2;

    

?>
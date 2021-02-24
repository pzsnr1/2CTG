<?php
/**
 * Zasię zmiennych
 * lokalny
 * globalny
 */
    $zmienna = 1;
    function pokaz(){
        global $zmienna;
        echo "Wartość zmienna = " . $zmienna;
    }
    pokaz();
    echo "<br>";

    $imie = "Arkadiusz";
    function wyswietl(){
        echo "Wartość zmiennej \$imie wynosi ";
        echo $GLOBALS['imie'];
        echo "<br>";
    }

    wyswietl();
?>
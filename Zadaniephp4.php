<?php
/**
 * definiowanie stałych ??????
 */
function zasieg(){
    define("IMIE","Arkadiusz");
    echo IMIE;
}
function foo(){
    static $i = 1;
    echo "Funkcja wywołana $i razy <br>";
    $i++;
}
foo();
foo();
foo();
foo();
?>
<?php
$i = 1;
/*
switch ($i) {
    case '1':
        echo "Dia lunes <br>";
        break;
    case '2':
            echo "Dia Martes <br>";
            break;
    case '3':
                echo "Dia Miercoles <br>";
                break;
    default:
        echo "Un dia del fin se semana";
        break;
}*/

echo match($i){
    1 => "Lunes",
    2 => "Martes",
    3 => "Miercoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sabado",
    default => "La opcion esta fuera de los dias de la semana",

};
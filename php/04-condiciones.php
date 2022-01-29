<?php
//Condicion simple
$edad = 18;
if ($edad >= 18) {
    echo "Es mayor de edad";
}

//Condicion con else
if ($edad <= 18) {
    echo "Es menor de edad";
} else {
    echo "Es mayor de edad";
}

//Condicion con elseif y else
$numero = 0;
if ($numero > 0) {
    echo "El numero es positivo";
} elseif ($numero < 0) {
    echo "El numero es negativo";
} else {
    echo "Es numero es 0";
}

//Operador Ternario
echo $edad >= 18 ? "Es Mayor de edad" : "Es menor de edad";

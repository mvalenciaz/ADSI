<?php
//Funcion sin parametros
function saludar()
{
    echo "Hola ADSI";
}

saludar();

//Funcion con parametros
function saludarFicha($numeroFicha)
{
    echo "Hola ADSI " . $numeroFicha;
}

saludarFicha(2344720);
$ficha = 2344720;
saludarFicha($ficha);

function saludarFichaOpcional($numeroFicha = 100100)
{
    echo "Hola ADSI " . $numeroFicha;
}

saludarFichaOpcional(2344720);

saludarFichaOpcional();

function saludarReturn()
{
    return "Hola ADSI";
}
saludarReturn();

echo saludarReturn();

<?php

$sueldo = 1000;


for ($i = 1; $i <= 6; $i++) {
    //aqui lo que hago es sumarle el 10% al sueldo
    //esto se iteraria por 6 meses
    $sueldo = $sueldo + ($sueldo * 0.10);
    echo "El sueldo del mes $i es: $sueldo <br>";
}  

// sacar el numero impar del 1 al 10

for ($i = 1; $i <= 10; $i++) {
    /*          Sirve para sacar numeros pares
    if ($i % 2 != 0) {
        continue;
    }
    echo "El número $i es par <br>";
    */
    
    if ($i % 2 == 0) {
        continue;
    }
    echo "El número $i es impar <br>";
}


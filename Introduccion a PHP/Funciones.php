<?php

sumar(5, 10); // Llamada a la función sumar con los argumentos 5 y 10
nombre("David"); // Llamada a la función nombre con el argumento "David"
nombre("Juan");

// Función para sumar dos números
function sumar(int $a, int $b) {
    return $a + $b;
}   

function nombre($nombre) {
    return "tu nombre es: $nombre";
}


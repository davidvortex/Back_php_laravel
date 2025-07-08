<?php

$edad = 50;

if ($edad == 18) {
    echo "Eres apenas mayor de edad";
} elseif($edad < 18 && $edad > 0) {
    echo "Eres menor de edad";
} elseif ($edad > 18 && $edad < 100) {
    echo "Eres mayor de edad";
} else {
    echo "Edad no válida";
}



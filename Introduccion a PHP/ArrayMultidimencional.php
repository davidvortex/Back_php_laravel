<?php

$futbol = [
    "partido" => [
        "delanteros" => [
            "jugador1" => "Cristiano Ronaldo",
            "jugador2" => "Lionel Messi",
            "jugador3" => "Neymar"
        ],
        "mediocampistas" => [
            "jugador1" => "Luka Modric",
            "jugador2" => "Kevin De Bruyne",
            "jugador3" => "Bruno Fernandes"
        ],
        "defensores" => [
            "jugador1" => "Sergio Ramos",
            "jugador2" => "Virgil van Dijk",
            "jugador3" => "Ruben Dias"
        ]
    ]
];

echo $futbol["partido"]["delanteros"]["jugador1"] . "<br>";
// Acceso a un jugador específico en la categoría de delanteros

foreach ($futbol["partido"]["mediocampistas"] as $key => $value) {
    echo "Mediocampistas: $value <br>";
}
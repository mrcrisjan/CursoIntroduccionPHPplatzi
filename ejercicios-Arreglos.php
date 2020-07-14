<?php

echo '<h2>Ejercicio 1</h2>';

$arreglo = [
    0 => 'lado',
    1 => 'ledo',
    2 => 'lido',
    3 => 'lodo',
    4 => 'ludo'
];

$diferencia = count($arreglo);

for ($start = 0; $start < $diferencia; $start++ ) {
    echo "$arreglo[$start], ";
};

echo '<br/> Decirlo al revés lo dudo. <br/>';

for ($start = 4; $start >= 0; $start-- ) {
    echo "$arreglo[$start], ";
};

echo '<br/> ¡Qué trabajo me ha costado!';

echo '<h2>Ejercicio 2</h2>';

$paisCiudad = [
   'Colombia' => [
       0 => 'Cali',
       1 => 'Medellín',
       2 => 'Manizales',
    ],
    'Costa Rica' => [
        0 => 'San José',
        1 => 'Alajuela',
        2 => 'Limón',
    ],
    'Ecuador' => [
        0 => 'Guayaquil',
        1 => 'Ibarra',
        2 => 'Esmeraldas',
    ],
    'Estados Unidos' => [
        0 => 'New York',
        1 => 'Washington',
        2 => 'Texas',
    ],
    'Argentina' => [
        0 => 'Buenos Aires',
        1 => 'La Paz',
        2 => 'Ushuaia'
    ]
];

// var_dump($paisCiudad);

foreach($paisCiudad as $pais=>$ciudades) {
    echo "<strong>$pais</strong>: ";
    foreach ($ciudades as $ciudad => $ciudadletras) {
        echo "$ciudadletras, ";
    };
    echo "<br>";
};

echo '<h2>Ejercicio 3</h2>';

/* Escribe el código necesario para encontrar los 3 números más grandes 
y los 3 números más bajos de la siguiente lista: */

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];


?>
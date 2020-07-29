<?php

$jobs = [
    [
      'title' => 'PHP Developer',
      'description' => 'This is an awesome job for MrCrisjan',
      'visible' => true,
      'months' => 16,
    ],
    [
      'title' => 'Python Dev',
      'description' => 'This is a fantastic job',
      'visible' => true,
      'months' => 14,
    ],
    [
      'title' => 'Devops',
      'description' => 'This another jobsy',
      'visible' => true,
      'months' => 32,
    ],
    [
      'title' => 'Node Dev',
      'description' => 'Node nice developing',
      'visible' => true,
      'months' => 24,
    ],
    [
      'title' => 'Frontend Dev',
      'description' => 'JavaScript Developer',
      'visible' => true,
      'months' => 3,
      ]
  ];

// no se puede declarar una funcion mas de una vez
  function getDuration($months) {
    $years = floor($months / 12);
    $extraMonths = $months % 12;
  
  
    if ($years < 1) {
      return "$extraMonths months";
    }
    else if ($extraMonths === 0) {
      return "$years years";
    }
    else {
      return "$years years and $extraMonths months";
    }
  };
  
  function printJob($job) {
    if ($job['visible'] == false) {
      return;
    }
    echo   '<li class="work-position">';
    echo   '<h5>' . $job['title'] . '</h5>';
    echo   '<p>' . $job['description'] . '</p>';
    echo   '<p>' . getDuration($job['months']) . '</p>';
   // echo   '<p>' . $totalMonths . '</p>';
    echo   '<strong>Achievements:</strong>';
    echo   '<ul>';
    echo   '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo   '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo   '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo   '</ul>';
    echo   '</li>';
  };

// Cuando es un archivo puro de PHP no hace
// falta cerrar el tag ?  >
// Solo hace falta cerrarlo cuando se combina
// con otros codigos como html
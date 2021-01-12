<?php

// require_once 'vendor/autoload.php';

// require 'app/Models/Job.php';
// require 'app/Models/Project.php';
// require_once 'app/Models/Printable.php';

// require 'lib1/Project.php';

use App\Models\{Job, Project};
// use app\Models\Project;

// $job1 = new Job('PHP Developer', 'This is an awesome job for MrCrisjan');  Lo borramos ya que lo vamos a traer de la base de datos.
// // $job1->setTitle();
// // $job1->description = ;
// $job1->months = 16;

// $job2 = new Job('Python Dev', 'This is a fantastic job');
// $job2->months = 14;

// $job3 = new Job('Devops', 'This another jobsy');
// //$job3->visible = 'true';
// $job3->months = 32;

// $projectLib = new Lib1\Project();

// $jobs = [
//   $job1,
//   $job2,
//   $job3
// ];

$jobs = Job::all();  //metodo de eloquent. trae todos los registros que encuentre
$projects = Project::all();

// $project1 = new Project('Project 1', 'Description 1 for the project'); 

// $projects = [
//   $project1,
// ];

// $jobs = [
//     [
//       'title' => 'PHP Developer',
//       'description' => 'This is an awesome job for MrCrisjan',
//       'visible' => true,
//       'months' => 16,
//     ],
//     [
//       'title' => 'Python Dev',
//       'description' => 'This is a fantastic job',
//       'visible' => true,
//       'months' => 14,
//     ],
//     [
//       'title' => 'Devops',
//       'description' => 'This another jobsy',
//       'visible' => true,
//       'months' => 32,
//     ],
//     [
//       'title' => 'Node Dev',
//       'description' => 'Node nice developing',
//       'visible' => true,
//       'months' => 24,
//     ],
//     [
//       'title' => 'Frontend Dev',
//       'description' => 'JavaScript Developer',
//       'visible' => true,
//       'months' => 3,
//       ]
//   ];

// no se puede declarar una funcion mas de una vez

  // function getDuration($months) {
  //   $years = floor($months / 12);
  //   $extraMonths = $months % 12;
  
  
  //   if ($years < 1) {
  //     return "$extraMonths months";
  //   }
  //   else if ($extraMonths === 0) {
  //     return "$years years";
  //   }
  //   else {
  //     return "$years years and $extraMonths months";
  //   }
  // };
  
  function printElement($job) {
    // if ($job['visible'] == false) {
    //   return;
    // }
    // if ($job->visible == false) {
    //   return;
    // }


    echo   '<li class="work-position">';
    echo   '<h5>' . $job->title . '</h5>';
    echo   '<p>' . $job->description . '</p>';
    echo   '<p>' . $job->getDurationAsString() . '</p>';
   // echo   '<p>' . $totalMonths . '</p>';
    echo   '<strong>Achievements:</strong>';
    echo   '<ul>';
    echo   '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo   '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo   '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo   '</ul>';
    echo   '</li>';
  };


  //   echo   '<li class="work-position">';
  //   echo   '<h5>' . $job['title'] . '</h5>';
  //   echo   '<p>' . $job['description'] . '</p>';
  //   echo   '<p>' . getDuration($job['months']) . '</p>';
  //  // echo   '<p>' . $totalMonths . '</p>';
  //   echo   '<strong>Achievements:</strong>';
  //   echo   '<ul>';
  //   echo   '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  //   echo   '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  //   echo   '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  //   echo   '</ul>';
  //   echo   '</li>';
  // };

// Cuando es un archivo puro de PHP no hace
// falta cerrar el tag ?  >
// Solo hace falta cerrarlo cuando se combina
// con otros codigos como html
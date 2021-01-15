<?php

namespace App\Controllers;

use App\Models\{Job, Project};

class IndexController {
    public function indexAction() {
        
        $jobs = Job::all();  //metodo de eloquent. trae todos los registros que encuentre
        $projects = Project::all();

        $name = 'Cristian Ladino';
        $limitMonths = 1000;

        include '../views/index.php';
    }
}
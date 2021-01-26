<?php

namespace App\Controllers;

use App\Models\{Job, Project};

class IndexController extends BaseController {
    public function indexAction() {
        
        $jobs = Job::all();  //metodo de eloquent. trae todos los registros que encuentre
        $projects = Project::all();

        $name = 'Cristian Ladino';
        $limitMonths = 1000;

        return $this->renderHTML('index.twig', [
            'name' => $name,
            'jobs' => $jobs,
            'projects' => $projects
        ]);
        // include '../views/index.php';
    }
}
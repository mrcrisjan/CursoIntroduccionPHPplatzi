<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => $_ENV['DB_HOST'],
    'database'  => $_ENV['DB_NAME'],
    'username'  => $_ENV['DB_USER'],
    'password'  => $_ENV['DB_PASS'],
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer();


$map = $routerContainer->getMap();
$map->get('index', '/', [
    'controller' => 'App\Controllers\IndexController',
    'action' => 'indexAction'
]);

$map->get('addJobs', '/jobs/add', [
    'controller' => 'App\Controllers\JobsController',
    'action' => 'getAddJobAction',
    'auth' => true
]);
$map->post('saveJobs', '/jobs/add', [
    'controller' => 'App\Controllers\JobsController',
    'action' => 'getAddJobAction'
]);

function printElementJob($job) {
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

  // test starts

  $map->get('addProjects', '/projects/add', [
      'controller' => 'App\Controllers\ProjectsController',
      'action' => 'getAddProjectAction',
      'auth' => true
  ]);
  $map->post('saveProjects', '/projects/add', [
      'controller' => 'App\Controllers\ProjectsController',
      'action' => 'getAddProjectAction'
  ]);
  
  function printElementProject($project) {
      echo   '<li class="work-position">';
      echo   '<h5>' . $project->title . '</h5>';
      echo   '<p>' . $project->description . '</p>';
      echo   '<p>' . $project->getDurationAsString() . '</p>';
     // echo   '<p>' . $totalMonths . '</p>';
      echo   '<strong>Achievements:</strong>';
      echo   '<ul>';
      echo   '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo   '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo   '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo   '</ul>';
      echo   '</li>';
    };

  // test finishes

// users route starts
$map->get('addUsers', '/users/add', [
    'controller' => 'App\Controllers\UsersController',
    'action' => 'getAddUserAction',
    'auth' => true
]);
$map->post('saveUsers', '/users/add', [
    'controller' => 'App\Controllers\UsersController',
    'action' => 'getAddUserAction'
]);
// users route finishes

// user login
$map->get('loginForm', '/login', [
    'controller' => 'App\Controllers\AuthController',
    'action' => 'getLogin'
]);
$map->get('logout', '/logout', [
    'controller' => 'App\Controllers\AuthController',
    'action' => 'getLogout'
]);
$map->post('auth', '/auth', [
    'controller' => 'App\Controllers\AuthController',
    'action' => 'postLogin'
    ]);
    //
    $map->get('admin', '/admin', [
        'controller' => 'App\Controllers\AdminController',
        'action' => 'getIndex',
        'auth' => true
    ]);
    
$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

if (!route) {
    echo 'no route';
} else {
    $handlerData = $route->handler;
    $controllerName = $handlerData['controller'];
    $actionName = $handlerData['action'];
    $needsAuth = $handlerData['auth'] ?? false;

    $sessionUserId = $_SESSION['userId'] ?? null;
    if ($needsAuth && !$sessionUserId) {
        echo 'Protected route. Please <strong><a href="/login">login</a></strong>';
        die;
    }

    $controller = new $controllerName;
    $response = $controller->$actionName($request);

    foreach($response->getHeaders() as $name => $values) {
        foreach($values as $value) {
            header(sprintf('%s: %s', $name, $value), false);
        }
    }
    http_response_code($response->getStatusCode());
    echo $response->getBody();
}
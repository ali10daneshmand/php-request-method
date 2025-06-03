<?php
define('ROOT_PATH',__DIR__);
require __DIR__.'/vendor/autoload.php';
require_once(__DIR__.'/helper/functions.php');
// require_once(__DIR__.'/app/Route.php');

use Illuminate\Database\Capsule\Manager as Capsule;
$config = require __DIR__.'/config/database.php';
$capsule = new Capsule;
$capsule->addConnection($config);
// Make this Capsule instance available globally via static methods
$capsule->setAsGlobal();
// Setup the Eloquent ORM
$capsule->bootEloquent();

// $users = Capsule::table('users')->where('id', '>', 4)->get();
// var_dump($users);
// exit();

use App\Route;
use App\Controller\FrontController;

$route = new Route();
$route->addRoute("GET","/webprogramming3/",[FrontController::class, 'home']);
$route->addRoute("GET",'/webprogramming3/about',[FrontController::class, 'about']);
$route->addRoute("GET",'/webprogramming3/infs',[FrontController::class, 'infs']);
$route->dispatch();

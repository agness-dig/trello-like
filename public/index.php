<?php

require_once '../vendor/autoload.php';

session_start();

// ROUTES

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    $router->setBasePath($_SERVER['BASE_URI']);
}

else {

    $_SERVER['BASE_URI'] = '/';
}


/*----------- MAIN ----------------- */

$router->map( 'GET',  '/',                          '\App\Controllers\MainController::home',     'main-home');
$router->map( 'GET',  '/mentionslegales',           '\App\Controllers\MainController::legal',    'main-legal');
$router->map( 'GET',  '/login',                     '\App\Controllers\MainController::login',    'login'  ); //accessing to the login page
$router->map( 'POST', '/login',                     '\App\Controllers\MainController::connect',  'connect'); // the act to connect from the login page
$router->map( 'GET',  '/signout',                   '\App\Controllers\MainController::logout',   'main-logout'); // closing the session and loging out

/*----------- ARRAY PAGE ----------------- */

$router->map( 'GET',  '/array',           '\App\Controllers\ArrayController::display',    'array-display');
$router->map( 'GET',  '/array',           '\App\Controllers\ArrayController::doingCard',  'array-doingCard');
$router->map( 'GET',  '/array',           '\App\Controllers\ArrayController::doneCard',   'array-doneCard');
$router->map( 'GET',  '/array',           '\App\Controllers\ArrayController::todoCard',   'array-todoCard');

/*----------- USER ----------------- */

$router->map('GET',   '/register',                  '\App\Controllers\UserController::register',     'user-add'); //goes to the form to create a new user
$router->map('POST',  '/register',                  '\App\Controllers\UserController::add',          'register'); //create a user

/* -------------
--- DISPATCH ---
--------------*/

$match = $router->match();
$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::err404');
$dispatcher->dispatch();
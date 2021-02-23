# AltoDispatcher

AltoDispatcher is a simple and easy-to-use class for dispatching after AltoRouter routing.

## Usage

```php
<?php

// require Composer as usual
require __DIR__ . '/../vendor/autoload.php';

// Instanciate AltoRouter
$router = new AltoRouter();

// Map your routes
$router->map( 'GET', '/', 'MainController::home', 'home' ); // MainController::home => AltoDispatcher will instanciate "MainController" and call its "home" method
$router->map( 'GET', '/other-page', 'MainController::otherPage', 'other-page' ); // MainController::otherPage => AltoDispatcher will instanciate "MainController" and call its "otherPage" method
// [...]
$match = $router->match();

// You can optionnally add a try/catch here to handle Exceptions
// Instanciate the dispatcher, give it the $match variable and a fallback action
$dispatcher = new Dispatcher($match, 'ErrorController::err404');
// then run the dispatch method which will call the mapped method
$dispatcher->dispatch();
```



<?php

use P87\PHMVCF\App as App;

$appRoute = new App\Route();

require_once(ROOT_DIR . 'routes.php');

if ( $theRoute = $appRoute->decide($route) ) {
    $controller = 'P87\PHMVCF\Controllers\\' . $theRoute['controller'];
    $controller = new $controller($theRoute);

    // fire the action
    if (method_exists($controller, $theRoute['action']) ) {
        $controller->$theRoute['action']();
    } else {
        // Handle action not found
        echo 'action not found';
    }
} else {
    // Handle no route found
    echo 'route not found';
}



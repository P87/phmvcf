<?php

define('CONTROLLER_DIR', realpath(__DIR__ . 'Controllers') . '/');
define('MODEL_DIR', realpath(__DIR__ . 'Models') . '/');
define('VIEW_DIR', realpath(__DIR__ . '/views') . '/');
define('ROOT_DIR', realpath(__DIR__) . '/');

if ( PHP_SAPI != 'cli' ) {
    
    require_once(ROOT_DIR . '/routes.php');

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
}

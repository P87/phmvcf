<?php

define('CONTROLLER_DIR', realpath('../controllers') . '/');
define('MODEL_DIR', realpath('../models') . '/');
define('VIEW_DIR', realpath('../views') . '/');
define('ROOT_DIR', realpath('../') . '/');

require ROOT_DIR . '../vendor/autoload.php';

if ( !session_id() ) {
    session_start();
}

$route = isset($_GET['_route']) ? $_GET['_route'] : 'index';

require_once(ROOT_DIR . 'bootstrap.php');

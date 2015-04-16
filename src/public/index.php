<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

if ( !session_id() ) {
    session_start();
}

$route = isset($_GET['_route']) ? $_GET['_route'] : 'index';

require_once(__DIR__ . '/../bootstrap.php');

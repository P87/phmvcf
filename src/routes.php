<?php

use P87\PHMVCF\App as App;

$appRoute = new App\Route();

$appRoute
    ->set('user/show/<id>/<name>', [
        'controller' => 'User',
        'action' => 'show'
    ])
    ->set('index', [
        'controller' => 'Index',
        'action' => 'index'
    ]);

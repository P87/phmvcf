<?php

$appRoute
    ->set('user/show/<id>/<name>', [
        'controller' => 'User',
        'action' => 'show'
    ])
    ->set('index', [
        'controller' => 'Index',
        'action' => 'index'
    ]);

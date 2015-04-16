<?php

namespace P87\PHMVCF\Controllers;

use P87\PHMVCFCore\App\View;
use P87\PHMVCFCore\App\Session;
use P87\PHMVCF\Models;

class Index extends Controller
{
    public function index()
    {
        $view = new View();
        $view
            ->set('content', View::view('test', ['p' => '<p>Test right here</p>']))
            ->set('title', 'Test');

        $view->render();
    }
}

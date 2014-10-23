<?php

namespace P87\PHMVCF\Controllers;

use P87\PHMVCF\App\View as View;

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
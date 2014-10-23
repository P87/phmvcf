<?php

namespace P87\PHMVCF\Controllers;

class Controller
{
    protected $route;

    public function __construct($route)
    {
        $this->route = $route;
    }
}
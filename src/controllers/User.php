<?php

namespace P87\PHMVCF\Controllers;

class User extends Controller
{
    public function show()
    {
        // eg. /user/show/4/pete
        if ( $data = $this->route['data'] ) {
            echo 'Here we would show a user with id ' . $data['id'] . ' with a name ' . $data['name'];
        }
    }
}
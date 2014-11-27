<?php

namespace P87\PHMVCF\Models;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class DORM
{
    protected $devMode = true;
    
    public function getEntityManager()
    {
    	$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . '../'), $this->devMode);
    	
    	$conn = array(
            'driver'   => 'pdo_mysql',
            'user'     => '',
            'password' => '',
            'dbname'   => ''
        );
        
        return EntityManager::create($conn, $config);
    }
    
}
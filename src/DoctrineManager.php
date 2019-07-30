<?php

namespace App;
use App\config\Config;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Annotations\AnnotationRegistry;

class DoctrineManager {

    public function __construct()
    {
        $dbConfig = Config::getDB();
        $path = [
            dirname(__DIR__ .'/db/entities'),
            dirname(__DIR__.'/db/repositories')
        ];
        $isDevMode = true;
        $config =
        Setup::createAnnotationMetadataConfiguration($path, $isDevMode, null, null,false);
        AnnotationRegistry::registerLoader('class_exists');
        $this->em=EntityManager::create($dbConfig, $config);
    }
}
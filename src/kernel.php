<?php

namespace App;

use Kint;

use App\routing\Web;
use \DI\Container;
use \DI\ContainerBuilder;

class kernel
{
    private $container;
    private $logger;
    private $route;

    public function __construct()
    {
        $this->container = $this->createContainer();
        $this->logger = $this->container->get(LogManager::class);
    }

    public function createContainer(): Container
    {

        $containerBuilder = new ContainerBuilder();
        $containerBuilder->useAutowiring(true);
        return $containerBuilder->build();
    }

    public function init()
    {

        $this->logger->info("Arrancamos el Server");
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $this->route = $this->container->get(RouterManager::class);
        $this->route->dispatch($httpMethod, $uri, Web::getDispatcher());
    }
}

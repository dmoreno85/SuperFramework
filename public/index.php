<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\kernel;


$kernel = kernel::getInstance();


$kernel->init();
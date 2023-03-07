<?php

use App\Services\Doctrine;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

$container = require __DIR__ . "/config/bootstrap.php";
$entityManager = $container->get(Doctrine::class)->em;
return ConsoleRunner::createHelperSet($entityManager);

<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once __DIR__ . "/../../vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: [__DIR__ . '/app/models'],
    isDevMode: true,
);

$connection = DriverManager::getConnection([
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'gestionanimals',
    'host'     => '127.0.0.1',
    'driver' => 'pdo_mysql',
], $config);




$entityManager = new EntityManager($connection, $config);

?>
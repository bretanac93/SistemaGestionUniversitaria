<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;
use Symfony\Component\ClassLoader\UniversalClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

$cargador= new UniversalClassLoader();

$cargador->registerNamespaces(array(
'Doctrine\\Common\\DataFixtures' => __DIR__.'/../vendor/doctrine-fixtures-bundle/lib',
'Doctrine\\Common' => __DIR__.'/../vendor/doctrine-common/lib',
 'FOS' => __DIR__.'/../vendor/bundles'
));

return $loader;

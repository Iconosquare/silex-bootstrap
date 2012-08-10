<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();
$app->register(new \Tripnity\Provider\DbProvider());

$app['debug'] = true;
        
$app->get('/', function() use ($app) {
  var_dump($app['db']->getConnection('lol'));
  $user = new \Tripnity\Model\User();
  return new \Symfony\Component\HttpFoundation\Response("Hello World");
});

return $app;
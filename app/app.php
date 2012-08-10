<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();
$app->register(new \Tripnity\DbProvider\DbProvider());
        
$app->get('/', function() {
  var_dump($app['db']->getConnection('lol'));
  $user = new \Tripnity\Model\User();
  return new \Symfony\Component\HttpFoundation\Response("Hello World");
});

return $app;
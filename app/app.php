<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() {
  $user = new \Tripnity\Model\User();
  return new \Symfony\Component\HttpFoundation\Response("Hello World");
});

return $app;
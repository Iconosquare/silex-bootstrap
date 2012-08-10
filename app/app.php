<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();
$app->register(new \Tripnity\Provider\DbProvider());

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../src/Resources/views',
));

$app->get('/', function() use ($app) {
  $users = array(
    "Jean", "Jacques", "Ludo"
  );
  return $app['twig']->render('home.html.twig', array('users' => $users));     
});

return $app;
<?php
require '../vendor/autoload.php';

// +---------------------------------------------------------------------------+
// | Prepare app                                                               |
// +---------------------------------------------------------------------------+

$app = new \Slim\Slim([
    'templates.path' => '../templates',
]);

// Create monolog logger and store logger in container as singleton
// (Singleton resources retrieve the same log resource definition each time)
$app->container->singleton('log', function() {
    $log = new \Monolog\Logger('mmr2410');
    $log->pushHandler(new \Monolog\Handler\StreamHandler('../logs/app.log', \Monolog\Logger::DEBUG));
    return $log;
});


// +---------------------------------------------------------------------------+
// | Prepare view                                                               |
// +---------------------------------------------------------------------------+

$app->view(new \Slim\Views\Twig());
$app->view->parserOptions = [
    'charset' => 'utf-8',
    'cache' => realpath('../templates/cache'),
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
];
$app->view->parserExtensions = [new \Slim\Views\TwigExtension()];


// +---------------------------------------------------------------------------+
// | Define routes                                                             |
// +---------------------------------------------------------------------------+

$app->get('/', function() use($app) {
    $app->log->info("mmr2410 '/' route");
    $app->render('index.html');
});

$app->get('/test/:page', function($page) use($app) {
    $app->log->info("mmr2410 '/test/' route");
    $app->render("test/{$page}.html");
});

$app->get('/:page', function($page) use($app) {
    $app->log->info("mmr2410 '/{$page}' route");
    $app->render("{$page}.html");
});


// +---------------------------------------------------------------------------+
// | Start app                                                                 |
// +---------------------------------------------------------------------------+

$app->run();

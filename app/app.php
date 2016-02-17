<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Change.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/calculate_change", function() use ($app) {
        $my_Change = new Change;
        $result = $my_Change->calculateChange($_GET['amount']);

        return $app['twig']->render('index.html.twig', array(
            'results' => $result
        ));
    });

    return $app;
?>

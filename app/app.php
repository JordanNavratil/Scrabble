<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('Scrabble.html.twig');
    });

    $app->get("/score", function() use ($app) {
        $new_scrabble = new Scrabble;
        $game_word = $new_scrabble->findScore($_GET['word']);
        return $app['twig']->render('Scrabble.html.twig', array('result' => $game_word));
    });


    return $app;

?>

<?php
    /*NOTE: "php-tilda" __DIR__ refers to the root directory aka where you start your server aka /Users/Guest/Desktop/titleCase/web/Users/Guest/Desktop/titleCase/web*/
    require_once(__DIR__ . "/../vendor/autoload.php");
    require_once(__DIR__ . "/../src/TitleCaseGenerator.php");

    session_start();
    if (empty($_SESSION["titles"])) {
        $_SESSION["titles"] = array();
    }


    $app = new Silex\Application();

    /*=Link up Twig===========================================================*/
    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__ . "/../views"));

    /*=Routes=================================================================*/
    $app->get("/", function() use($app) {
        return $app["twig"]->render("title_form.html.twig");
    });


    return $app;
 ?>

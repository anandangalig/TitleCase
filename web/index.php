<?php
    /* NOTE: we are executing the code in app.php. That code has a return value that is a Silex\Application object. This silex application object has a method associated with it called run(). This is a black box for now that we will not go into in further detail. All we need to know is that we are defining a silex application in app/app.php and running it in our web directory which is the same location from which we start our localhost:8000 (aka our server) */
    $website = require_once(__DIR__ . "/../app/app.php");
    $website->run();
 ?>

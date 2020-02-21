<?php

namespace Core;


class Core
{
    /**
     *
     */
    public function run()
    {
        echo __CLASS__ . " [OK]" . PHP_EOL . '<br /><br />';

        $router = new Router($_GET['url']);

        include_once 'routes.php';

        $router->run();
    }
}
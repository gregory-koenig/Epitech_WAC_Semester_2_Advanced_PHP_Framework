<?php

namespace Core;

spl_autoload_register(function($class_name)
{
    $file = ROOT . str_replace('\\', '/', $class_name) . '.php';
    $file_controller = ROOT . 'src/Controller/'
        . str_replace('\\', '/', $class_name) . '.php';
    $file_model = ROOT . 'src/Model/'
        . str_replace('\\', '/', $class_name) . '.php';

    if (is_file($file)) {
        include_once $file;
    } elseif (is_file($file_controller)) {
        include_once $file_controller;
    } elseif (is_file($file_model)) {
        include_once $file_model;
    }
});
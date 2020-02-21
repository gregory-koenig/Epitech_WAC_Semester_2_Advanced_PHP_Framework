<?php

namespace Core;


class RouterException extends \Exception {
    public function __construct()
    {
        header('Location: ' . BASE_URL . '/404');
    }
}
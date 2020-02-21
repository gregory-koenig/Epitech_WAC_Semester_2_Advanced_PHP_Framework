<?php

namespace src\Controller;
use Core\Controller;

class AppController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        $this->render('App/index');
    }

    public function notFoundAction() {
        $this->render('Error/404');
    }
}
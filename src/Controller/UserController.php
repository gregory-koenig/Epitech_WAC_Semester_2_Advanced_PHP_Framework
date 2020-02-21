<?php

namespace src\Controller;
use Core\Controller, src\Model\UserModel;

class UserController extends Controller
{
    private $user;
    private $orm;

    public function __construct()
    {
        parent::__construct();
        $this->user = new UserModel();
    }

    public function indexAction()
    {
        $data = $this->user->getAll();
        $this->render('User/show', ['data' => $data]);
    }

    public function registerView() {
        $this->render('User/register');
    }

    public function registerAction() {
        $this->user->save();
    }

    public function loginView() {
        $this->render('User/login');
    }

    public function loginAction() {
        $this->user->login();
    }
}
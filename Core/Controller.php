<?php


namespace Core;


class Controller
{
    static protected $_render;
    private $request;
    private $post;
    private $get;

    public function __construct()
    {
        $this->request = new Request();
        $this->post = $this->request->checkPost();
        $this->get = $this->request->checkGet();
    }

    protected function render($view, $scope = []) {
        extract($scope);

        $file = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View',
                $view]) . '.php';

        if (file_exists($file)) {
            ob_start();
            include($file);
            $view = ob_get_clean();

            ob_start();
            include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src',
                    'View', 'index']) . '.php');
            self::$_render = ob_get_clean();
        }
    }

    public function __destruct()
    {
        echo self::$_render;
    }
}
<?php

namespace application\core;

class View {
    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
    }

    public function render($title, $vars = [])
    {
        $path = 'application/views/'.$this->path.'.php';

        extract($vars);
        if (file_exists($path))
        {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'application/views/layout/'.$this->layout.'.php';
        }
    }

    public function redirect($url)
    {
        header('Location: '.$url);
    }

    public static function errorCode($code)
    {
        $path = 'application/views/errors/'.$code.'.php';

        http_response_code($code);
        if (file_exists($path))
        {
            require $path;
        }
        exit;
    }

    public function message($status, $message)
    {
        json_encode(['status' => $status, 'message' => $message]);
    }

    public function js_redirect($url)
    {
        exit(json_encode(['url' => $url]));
    }

}
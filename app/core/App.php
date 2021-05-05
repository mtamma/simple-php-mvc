<?php

class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct () {
        $url = $this->parseURL();

        // set controller
        if (isset($url[0])) {
            if (file_exists('../app/controllers/' . $url[0] . '.php')) {
                $this->controller = ucfirst($url[0]);
                unset($url[0]);
            }
        }

        // set method
        require_once '../app/controllers/' . $this->controller . '.php';
        $instance = new $this->controller;
        if (isset($url[1])) {
            if (method_exists($instance, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // set params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // init controller method and params
        call_user_func_array(array($instance, $this->method), $this->params);
    }

    private function parseURL () {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

}
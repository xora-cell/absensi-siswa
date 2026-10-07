<?php 
    class Routing {
        protected $controller = 'Dashboard';
        protected $method = 'index';
        protected $parameter = [];

        function __construct() {
            $URL = $this->getURL();

            if ($URL == NULL) {
                $URL = [$this->controller];
            }

            if (file_exists('../app/controllers/'. $URL[0] .'.php')) {
                $this->controller = $URL[0];
                unset($URL[0]);
            }

            require_once '../app/controllers/'. $this->controller . '.php';
            $this->controller = new $this->controller;

            if (isset($URL[1])) {
                if (method_exists($this->controller, $URL[1])) {
                    $this->method = $URL[1];
                    unset($URL[1]);
                }
            }

            if (!empty($URL)) {
                $this->parameter = array_values($URL);
            }

            call_user_func_array([$this->controller, $this->method], $this->parameter);
        }

        function getURL() {
            if (isset($_GET['URL'])) {
                $URL = rtrim($_GET['URL'], '/');
                $URL = filter_var($URL, FILTER_SANITIZE_URL);
                $URL = explode('/', $URL);

                return $URL;
            }
        }
    }

?>
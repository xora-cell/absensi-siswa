<?php
    class controller {
        function views($path, $data = []) {
            extract($data);
            require_once '../app/views/' . $path . '.php';
        }
        function models($path) {
            require_once '../app/models/' . $path . '.php';
            return new $path;
        }
    }
?>
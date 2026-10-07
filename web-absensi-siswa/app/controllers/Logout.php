<?php
    class Logout extends Controller {
        function logout_process() {
            $this->models('AutentikasiModels')->logout_check();
        }
    }
?>
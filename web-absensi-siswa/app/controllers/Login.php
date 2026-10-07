<?php 
    session_start();

    if (isset($_SESSION['dashboard'])) {
        header('Location: '. URL_UTAMA .'/dashboard');
        exit();
    }

    class Login extends Controller {
    
        function index() {
            return $this->views('login');
        }

        function login_process() {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);

            $this->models('AutentikasiModels')->Login_check($username, $password);
        }
    }

?>
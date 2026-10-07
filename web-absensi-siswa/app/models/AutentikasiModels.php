<?php
    class AutentikasiModels {
        private $table = 'tb_user';
        private $db_connect;

        function __construct() {
            $this->db_connect = new Database;
        }

        public function login_check($username, $password) {
            $query = "SELECT * FROM $this->table WHERE username = '$username'";
            $this->db_connect->query($query);
            $data = $this->db_connect->resultOne();

            if ($username == $data['username']) {
                if (password_verify($password, $data['password'])) {
                    $_SESSION['dashboard'] = true;
                    header('location: ' . URL_UTAMA . '/dashboard');
                    exit;
                }else {
                    Flasher::setFlasher('Password', 'tidak valid!', 'danger');
                    header('location: ' . URL_UTAMA . '/login');
                    exit;
                }
            }else {
                Flasher::setFlasher('Username', 'tidak ditemukan!', 'danger');
                header('location: ' . URL_UTAMA . '/login');
                exit;
            }
        }

         public function logout_check() {
            session_start();

            $_SESSION = [];
            session_unset();
            session_destroy();

            header('Location: '. URL_UTAMA .'/login');
            exit;
        }
    }
?>
<?php
    class Flasher {
        public static function setFlasher($pesan, $aksi, $tipe) {
            $_SESSION['flash'] = [
                'pesan' => $pesan,
                'aksi' => $aksi,
                'tipe' => $tipe
            ];
        }

        static function getFlasher() {
            if (isset($_SESSION['flash'])) {
                echo '<div class="alert alert-'.$_SESSION['flash']['tipe'].' alert-dismissible fade show small" role="alert">'.$_SESSION['flash']['pesan'].' <strong>'.$_SESSION['flash']['aksi'].'</strong></div>';
						
				unset($_SESSION['flash']);
            }
        }
    }

?>
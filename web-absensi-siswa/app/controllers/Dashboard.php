<?php
    session_start();
    
    if (!isset($_SESSION['dashboard'])) {
        header('Location: '. URL_UTAMA .'/login');
        exit();
    }

    class Dashboard extends Controller {
        function index() {
            $dataSiswa = $this->models('DashboardModels')->jumlahSiswa();
            $dataAbsensi = $this->models('DashboardModels')->jumlahAbsensi();
            $dataKelas = $this->models('DashboardModels')->jumlahKelas();
            
            $data['data'] = [
                'dataSiswa' => $dataSiswa,
                'dataAbsensi' => $dataAbsensi,
                'dataKelas' => $dataKelas
            ];

            $this->views('dashboard', $data);
        }
    }

?>
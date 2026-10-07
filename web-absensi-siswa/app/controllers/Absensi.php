<?php
    session_start();

     if (!isset($_SESSION['Dashboard'])) {
        header('Location: '. URL_UTAMA .'/login');
        exit();
     }

    class Absensi extends Controller {
        function index() {
            $absensi = $this->models('AbsensiModels')->getAbsensiData();
            $data['absensi'] = $absensi;
            $this->views('absensi', $data);
        }

        // halaman tambah data
        function add_absensi() {
            $absensi = $this->models('AbsensiModels')->getAbsensiData();
            $data['absensi'] = $absensi;
            $this->views('absensi_add', $data);
        }

        // halaman edit data
        function edit_absensi($id) {
            $data['data'] = [
                'siswa' => $this->models('SiswaModels')->getSiswaID($id),
                'absensi' => $this->models('AbsensiModels')->getAbsensiData()
            ];

            $this->views('absensi_edit', $data);
        }

        // proses tambah data
        function add_absensi_process() {
            $siswa = htmlspecialchars($_POST['siswa']);
            $absensi  = htmlspecialchars($_POST['absensi']);

            $this->models('AbsensiModels')->addAbsensiData($siswa, $absensi);
            Flasher::setFlasher('Absensi berhasil', 'tersimpan!', 'success');
            header('Location: '. URL_UTAMA .'/absensi');
            exit;
        }

        // proses edit data
        function edit_absensi_process($id) {
            $siswa = htmlspecialchars($_POST['siswa']);
            $absensi = htmlspecialchars($_POST['absensi']);

            $this->models('AbsensiModels')->editAbsensiData($id, $siswa, $absensi);
            Flasher::setFlasher('Absensi berhasil', 'terubah!', 'success');
            header('Location: '. URL_UTAMA .'/absensi');
            exit;
        }

        // hapus data
        function delete_absensi($id) {
            $this->models('AbsensiModels')->deleteAbsensiData($id);
            Flasher::setFlasher('Absensi berhasil', 'terhapus!', 'success');
            header('Location: '. URL_UTAMA .'/absensi');
            exit;
        }
    }

?>
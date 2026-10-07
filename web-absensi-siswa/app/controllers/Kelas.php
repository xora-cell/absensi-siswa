<?php
    session_start();

     if (!isset($_SESSION['dashboard'])) {
        header('Location: '. URL_UTAMA .'/login');
        exit();
     }

    class Kelas extends Controller {
        function index() {
            $kelas = $this->models('KelasModels')->getKelasData();
            $data['kelas'] = $kelas;
            $this->views('kelas', $data);
        }

        // halaman tambah data
        function add_kelas() {
            $jurusan = $this->models('KelasModels')->getKelasData();
            $data['kelas'] = $kelas;
            $this->views('kelas_add', $data);
        }

        // halaman edit data
        function edit_kelas($id) {
            $data['data'] = [
                'kelas' => $this->models('KelasModels')->getKelasID($id),
            ];

            $this->views('kelas_edit', $data);
        }

        // proses tambah data
        function add_kelas_process() {
            $kelas = htmlspecialchars($_POST['nama_kelas']);

            $this->models('KelasModels')->addKelasData($nama_kelas);
            Flasher::setFlasher('Kelas berhasil', 'tersimpan!', 'success');
            header('Location: '. URL_UTAMA .'/kelas');
            exit;
        }

        // proses edit data
        function edit_kelas_process($id) {
            $kelas = htmlspecialchars($_POST['nama_kelas']);

            $this->models('KelasModels')->editKelasData($id, $nama_kelas);
            Flasher::setFlasher('Kelas berhasil', 'terubah!', 'success');
            header('Location: '. URL_UTAMA .'/kelas');
            exit;
        }

        // hapus data
        function delete_kelas($id) {
            $this->models('KelasModels')->deleteKelasData($id);
            Flasher::setFlasher('Kelas berhasil', 'terhapus!', 'success');
            header('Location: '. URL_UTAMA .'/kelas');
            exit;
        }
    }

?>
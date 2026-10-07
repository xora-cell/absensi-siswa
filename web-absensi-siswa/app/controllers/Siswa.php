<?php 
    session_start();

    if (!isset($_SESSION['dashboard'])) {
        header('location: ' . URL_UTAMA . '/login');
        exit;
    }

    class Siswa extends Controller {
        function index() {
            $siswa = $this->models('SiswaModels')->getSiswaData();
            $data['siswa'] = $siswa;
            $this->views('siswa', $data);
        }

        function add_siswa() {
            $kelas = $this->models('KelasModels')->getKelasData();
            $jurusan = $this->models('JurusanModels')->getJurusanData();
            $NISN = $this->models('NISNModels')->getNISNData();
            $data['kelas'] = $kelas;
            $data['jurusan'] = $jurusan;
            $data['NISN'] = $NISN;
            $this->views('siswa_add', $data);
        }

        function edit_siswa($id) {
            $data['data'] = [
                'kelas' => $this->models('KelasModels')->getKelasData(),
                'NISN' => $this->models('NISNModels')->getNISNData(),
                'jurusan' => $this->models('JurusanModels')->getJurusanData(),
                'siswa' => $this->models('SiswaModels')->getSiswaID($id)
            ];
            
            $this->views('siswa_edit', $data);
        }

        function add_siswa_process() {
            $NISN = htmlspecialchars($_POST['NISN']);
            $nama = htmlspecialchars($_POST['nama']);
            $jurusan = htmlspecialchars($_POST['jurusan']);
            $kelas = htmlspecialchars($_POST['kelas']);

            $this->models('SiswaModels')->addSiswaData($NISN, $nama, $jurusan, $kelas);
            Flasher::setFlasher('Siswa berhasil', 'tersimpan!', 'success');
            header('Location: '. URL_UTAMA .'/siswa');
            exit;
        }

        function edit_siswa_process($id) {
            $NISN = htmlspecialchars($_POST['NISN']);
            $nama = htmlspecialchars($_POST['nama']);
            $jurusan = htmlspecialchars($_POST['jurusan']);
            $kelas = htmlspecialchars($_POST['kelas']);

            $this->models('SiswaModels')->editSiswaData($id, $NISN, $nama, $jurusan, $kelas);
            Flasher::setFlasher('Siswa berhasil', 'terubah!', 'success');
            header('Location: '. URL_UTAMA .'/siswa');
            exit;
        }

        // function delete_siswa($id) {
        //     $this->models('SiswaModels')->deleteSiswaData($id);
        //     Flasher::setFlasher('Siswa berhasil', 'terhapus!', 'success');
        //     header('Location: '. URL_UTAMA .'/siswa');
        //     exit;
        // }
    }

?>